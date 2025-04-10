<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\kodes;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class generate extends Controller
{ 
    public function form()
    {
        return view('generator');
    }


    public function generat(Request $request)
    {
        $request->validate([
            'kodeAset'=> 'required|string|max:2',
            'tahun'=> 'required|string|digits:4',
            'awal'=> 'required|integer|min:1',
            'akhir'=>'required|integer|gte:start'
            
        ]);
        
        $kode_Aset = strtoupper($request->kodeAset);
        $tahun = $request->tahun; 
        $awal = $request->awal;
        $akhir = $request->akhir;
        $tahun2Digit = substr($tahun, -2);
        
        $data = [];

        for ($i = $awal; $i <= $akhir; $i++) {
            $nomor = str_pad($i, 4, '0', STR_PAD_LEFT); // jadi 0001, 0002, dst
            $kode = $kode_Aset . $tahun2Digit . $nomor;

        
   // Generate QR Code SVG
             $qr = QrCode::size(150)->generate("QR $kode");

             $data[]= [
                'kodeAset' => $kode,
                'qr' => $qr,
            ];

            dd($request->all());
    }
    return view('qr_kode', compact('data'));

}

}