<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class KodeController extends Controller
{
    public function index()
    {
        return view('kode');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'kode' => 'required|string',
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

            $qr = QrCode::format('svg')
                ->size(20)
                ->color(0, 0,0)
                ->generate($kodeLengkap);

            $data[] = [
                'kode' => $kodeLengkap,
                'qr' => $qr
            ];
        }

        return view('qrcode', compact('data'));
    }

}