<?php
include 'koneksi.php';
$Kode_MK = $_GET['Kode_MK'];
$data = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE Kode_MK='$Kode_MK'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Matakuliah</title>
</head>
<body>
<h3>Edit Data Mata Kuliah</h3>
<form method="post" action="edit.php">
    <table>
        <tr><td>Kode MK</td><td><input type="text" name="Kode_MK" value="<?= $d['Kode_MK'] ?>" readonly></td></tr>
        <tr><td>Nama MK</td><td><input type="text" name="Nama_MK" value="<?= $d['Nama_MK'] ?>"></td></tr>
        <tr><td>SKS</td><td><input type="number" name="SKS" value="<?= $d['SKS'] ?>"></td></tr>
        <tr><td>Semester</td><td><input type="number" name="Semester" value="<?= $d['Semester'] ?>"></td></tr>
        <tr><td></td><td><input type="submit" value="Simpan"></td></tr>
    </table>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
