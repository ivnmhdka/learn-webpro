<?php
$namaBarang = "";
$hargaBarang = 0;
$totalHarga = 0;
$diskon = 0;
$totalBayar = 0;

if (isset($_POST['cari']) || isset($_POST['proses'])) {
    $kode = $_POST['kode'];

    switch ($kode) {
        case "A001":
            $namaBarang = "Mouse";
            $hargaBarang = 5000000;
            break;
        case "A002":
            $namaBarang = "Headphone";
            $hargaBarang = 750000;
            break;
        case "A003":
            $namaBarang = "CPU";
            $hargaBarang = 2300000;
            break;
        default:
            $namaBarang = "Tidak ditemukan";
            $hargaBarang = 0;
            break;
    }

    if (isset($_POST['proses'])) {
        $jumlah = $_POST['jumlah'];
        $metode = $_POST['metode'];

        $totalHarga = $hargaBarang * $jumlah;

        if ($metode == "Cash" || $jumlah > 5) {
            $diskon = 0.12 * $hargaBarang;
        } else if ($metode == "Kredit" && $jumlah > 20) {
            $diskon = 0.05 * $totalHarga;
        } else {
            $diskon = 0;
        }

        $totalBayar = $totalHarga - $diskon;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penjualan Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<form method="POST" action="proses.php">
    <div class="form-box">
        <h2>HASIL PENJUALAN BARANG</h2>

        Kode Barang:
        <input type="text" name="kode" value="<?= $_POST['kode'] ?? '' ?>">
        <input type="submit" name="cari" value="Cari"><br><br>

        Nama Barang:
        <input type="text" name="nama" value="<?= $namaBarang ?>"><br><br>

        Harga Barang:
        <input type="text" name="harga" value="<?= $hargaBarang ?>"><br><br>

        Jumlah Barang:
        <input type="number" name="jumlah" value="<?= $_POST['jumlah'] ?? '' ?>"><br><br>

        Metode Bayar:
        <select name="metode">
            <option value="Cash" <?= (isset($_POST['metode']) && $_POST['metode'] == "Cash") ? "selected" : "" ?>>Cash</option>
            <option value="Kredit" <?= (isset($_POST['metode']) && $_POST['metode'] == "Kredit") ? "selected" : "" ?>>Kredit</option>
        </select>
        <input type="submit" name="proses" value="Proses"><br><br>

        Total Harga:
        <input type="text" name="totalHarga" value="<?= $totalHarga ?>"><br><br>

        Diskon:
        <input type="text" name="diskon" value="<?= $diskon ?>"><br><br>

        Total Bayar:
        <input type="text" name="totalBayar" value="<?= $totalBayar ?>"><br><br>

        <input type="button" value="Cetak" onclick="window.print()">
    </div>
</form>
</center>
</body>
</html>
