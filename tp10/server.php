<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = trim($_POST["nama"]);
  
  if (empty($nama)) {
    echo "<span style='color:red;'>Input nama tidak boleh kosong!</span>";
  } else {
    echo "<span style='color:green;'>Halo, " . htmlspecialchars($nama) . "! Selamat datang di AJAX!</span>";
  }
}
?>
