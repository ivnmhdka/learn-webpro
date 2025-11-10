<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data Matakuliah</h2>
    <a href="index.php">Kembali</a><br><br>
    <?php
    include 'koneksi.php';
    $Kode_MK = $_GET['Kode_MK'];
    $data = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE Kode_MK='$Kode_MK'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="edit.php">
        <table>
            <tr>
                <td>Kode MK</td>
                <td><input type="text" name="Kode_MK" value="<?php echo $d['Kode_MK']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama MK</td>
                <td><input type="text" name="Nama_MK" value="<?php echo $d['Nama_MK']; ?>"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td><input type="number" name="SKS" value="<?php echo $d['SKS']; ?>"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="number" name="Semester" value="<?php echo $d['Semester']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
    <?php } ?>
</body>
</html>