<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Matakuliah</title>
</head>
<body>
<h3>Tambah Data Mata Kuliah</h3>
<form method="post" action="tambah.php">
    <table>
        <tr><td>Kode MK</td><td><input type="text" name="Kode_MK" required></td></tr>
        <tr><td>Nama MK</td><td><input type="text" name="Nama_MK" required></td></tr>
        <tr><td>SKS</td><td><input type="number" name="SKS" required></td></tr>
        <tr><td>Semester</td><td><input type="number" name="Semester" required></td></tr>
        <tr><td></td><td><input type="submit" value="Simpan"></td></tr>
    </table>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
