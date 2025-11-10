<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
</head>
<body>
    <h2>Data Mata Kuliah</h2>
    <a href="form_tambah.php">+ Tambah Data</a><br><br>
    <table border="1">
        <tr>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM matakuliah");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $d['Kode_MK']; ?></td>
            <td><?php echo $d['Nama_MK']; ?></td>
            <td><?php echo $d['SKS']; ?></td>
            <td><?php echo $d['Semester']; ?></td>
            <td>
                <a href="form_edit.php">Edit</a> |
                <a href="hapus.php" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>