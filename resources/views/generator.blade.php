<!DOCTYPE html>
<html>
<head>
    <title>Generate Kode Aset</title>
</head>
<body>
    <h2>Form Generate Kode Aset</h2>
    <form action="/generate" method="POST">
        @csrf
        <label>Kode Aset: <input type="text" name="kode" value="" required></label><br><br>
        <label>Tahun: <input type="number" name="tahun" value="{{ date('Y') }}" required></label><br><br>
        <label>Angka Awal: <input type="number" name="awal" value="" required></label><br><br>
        <label>Angka Akhir: <input type="number" name="akhir" value="" required></label><br><br>
        <button type="submit">Generate</button>
    </form>
</body>
</html>