<!DOCTYPE html>
<html>
<head>
    <title>Generator Kode</title>
    <link rel="stylesheet" href="{{ asset('css/kode.css') }}">
</head>
<body>
    <h2>Form Generator Kode</h2>
    <form action="/generate" method="POST" class="form">
        @csrf
        <label>Kode Awal: <input type="text" name="kode" value=""></label>
        <input type="number" name="tahun" class="tahun" value="{{ date('Y') }}"></label><br><br>
        <label>Angka Awal: <input type="number" name="awal" value=""></label><br><br>
        <label>Angka Akhir: <input type="number" name="akhir" value=""></label><br><br>
        <button type="submit">Generate</button>
        <a href="/qr_kode"></a>
    </form>

    {{-- @if (!empty($data))
        <h3>Hasil QR Code:</h3>
        @foreach ($data as $item)
            <div style="margin-bottom: 15px;">
                {!! $item['qr'] !!}
                <p>{{ $item['kode'] }}</p>
            </div>
        @endforeach
    @endif --}}
</body>
</html>