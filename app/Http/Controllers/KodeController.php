<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;

class KodeController extends Controller
{
    public function index()
    {
        return view('kode');
    }

    public function generate(Request $request)
    {
        ini_set('max_execution_time', 300); // 5 menit
        ini_set('memory_limit', '512M');
        $request->validate([
            'kode' => 'required|string|size:2',
            'tahun' => 'required|digits:4',
            'awal' => 'required|integer|min:1',
            'akhir' => 'required|integer|gte:awal',
        ]);

        $kode = strtoupper($request->kode);
        $tahun = $request->tahun;
        $tahun2Digit = substr($tahun, -2);
        $awal = (int) $request->awal;
        $akhir = (int) $request->akhir;

        $data = [];

        for ($i = $awal; $i <= $akhir; $i++) {
            $nomor = str_pad($i, 5, '0', STR_PAD_LEFT);
            $kodeLengkap = $kode . $tahun2Digit . $nomor;
            
            
            $qr = QrCode::format('png')
                ->size(100)
                ->color(0, 0,0)
                ->generate($kodeLengkap);
            
            $data[] = [
                'kode' => $kodeLengkap,
                'qr' => 'data:image/png;base64,' . base64_encode($qr)
            ];
        }
          // Simpan data ke session
        Session::put('qr_data', $data);
        return view('qrcode', compact('data'));
    }

    public function view_pdf(){
        ini_set('max_execution_time', 300);
        ini_set('memory_limit', '512M');
        $data = Session::get('qr_data', []);
       
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
        return $pdf->stream('QRcode.pdf');


        
    }

}