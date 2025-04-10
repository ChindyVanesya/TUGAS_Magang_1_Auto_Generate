
<!DOCTYPE html>
<html>
<head>
    <title>QR Code Cards</title>
    <link rel="stylesheet" href="{{ asset('css/qrcode.css') }}">
</head>
<body>
    <div class="no-print">
        <a href="/generate">Kembali</a> |
        <button onclick="window.print()">Cetak</button>
    </div>

    <div class="container">
        @foreach ($data as $item)
            <div class="card">
                <div class="qr-code">{!! $item['qr'] !!}</div>
                <div class="kode">{{ $item['kode'] }}</div>
            </div>
        @endforeach
    </div>
</body>
</html>