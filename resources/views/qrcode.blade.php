
<!DOCTYPE html>
<html>
<head>
    <title>QR Code Cards</title>
    <link rel="stylesheet" href="{{ asset('css/qrcode.css') }}">
</head>
<body>
    <div class="no-print">
        <a href="/generate">Kembali</a> |
       
            <a href="{{ url('/view/pdf') }}" target="_blank">📄 Cetak PDF</a>
        </a>
        

    </div>

    <div class="container">
        @foreach ($data as $item)
            <div class="card">
                <img src="{{ $item['qr'] }}" class="qr-code">
                <div class="kode">{{ $item['kode'] }}</div>
            </div>
        @endforeach
    </div>
</body>
</html>