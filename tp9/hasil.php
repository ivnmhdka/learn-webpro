<!DOCTYPE html>
<html>
<head>
    <title>Tampilan Data Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            max-width: 500px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .card h2 {
            margin-top: 0;
            font-size: 18px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .card p {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
        }
        a {
            color: #0d6efd;
            text-decoration: none;
            display: block;
            margin-top: 15px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tanggal = $_POST["tanggal"];
    $hobi = isset($_POST["hobi"]) ? $_POST["hobi"] : [];

    $tanggalFormatted = date("d F Y", strtotime($tanggal));

    $hobiList = implode(", ", $hobi);
    ?>

    <div class="card">
        <h2>Tampilan Data Anda</h2>
        <p><span class="label">Nama Lengkap:</span> <?php echo htmlspecialchars($nama); ?></p>
        <p><span class="label">Tanggal Lahir:</span> <?php echo $tanggalFormatted; ?></p>
        <p><span class="label">Hobi:</span> <?php echo $hobiList; ?></p>
    </div>

    <a href="form.php">« Kembali ke Form</a>

<?php } ?>

</body>
</html>
