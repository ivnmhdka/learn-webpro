<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Matakuliah</h2>
    <a href="index.php">Kembali</a><br><br>
    <form method="post" action="tambah.php">
        <table>
            <tr>
                <td>Kode MK</td>
                <td><input type="text" name="Kode_MK" required></td>
            </tr>
            <tr>
                <td>Nama MK</td>
                <td><input type="text" name="Nama_MK" required></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td><input type="number" name="SKS" required></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="number" name="Semester" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>