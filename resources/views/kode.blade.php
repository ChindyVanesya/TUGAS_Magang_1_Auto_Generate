<!DOCTYPE html>
<html>
<head>
    <title>Generator Kode</title>
    <link rel="stylesheet" href="{{ asset('css/kode.css') }}">
</head>
<body>

    <div class="main">


        <h2>Form Generator Kode</h2>
        <form action="/generate" method="POST" class="form">
            @csrf
            <div class="kode">
    
                <label>Kode Awal:<input type="text" name="kode" placeholder="Contoh: EL"></label>
                <input type="number" name="tahun" class="tahun" value="{{ date('Y') }}"><br><br>
            </div>
            <label>Angka Awal: <input type="number" name="awal" placeholder=""></label><br>
            <label>Angka Akhir: <input type="number" name="akhir" placeholder=""></label><br><br>
            <button type="submit">Generate</button>
            {{-- <a href="/qr_kode"></a> --}}
        </form>
    </div>
   
</body>
</html>