<?php
include 'koneksi.php';

$Kode_MK = $_GET['Kode_MK'];

mysqli_query($koneksi, "DELETE FROM matakuliah WHERE Kode_MK='$Kode_MK'");

header("location:index.php");
?>