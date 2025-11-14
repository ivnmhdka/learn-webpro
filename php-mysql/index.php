<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
</head>
<body>
<h2>Data Mata Kuliah</h2>
<a href="form_tambah.php">+ TAMBAH DATA</a><br><br>
<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>Kode MK</th>
    <th>Nama MK</th>
    <th>SKS</th>
    <th>Semester</th>
    <th>OPSI</th>
</tr>
<?php
$data = mysqli_query($koneksi, "SELECT * FROM matakuliah");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['Kode_MK'] ?></td>
    <td><?= $d['Nama_MK'] ?></td>
    <td><?= $d['SKS'] ?></td>
    <td><?= $d['Semester'] ?></td>
    <td>
        <a href="form_edit.php?Kode_MK=<?= $d['Kode_MK'] ?>">Edit</a> |
        <a href="hapus.php?Kode_MK=<?= $d['Kode_MK'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>
