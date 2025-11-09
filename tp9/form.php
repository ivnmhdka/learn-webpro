<!DOCTYPE html>
<html>
<head>
    <title>Formulir Data Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h2 {
            font-size: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"] {
            width: 300px;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .checkbox-group {
            margin-top: 10px;
        }
        .checkbox-group input {
            margin-right: 5px;
        }
        button {
            margin-top: 20px;
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>
    <h2>Formulir Data Diri</h2>
    <form action="hasil.php" method="post">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama">

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal">

        <label>Hobi:</label>
        <div class="checkbox-group">
            <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
            <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
            <input type="checkbox" name="hobi[]" value="Musik"> Musik<br>
            <input type="checkbox" name="hobi[]" value="Lainnya"> Lainnya
        </div>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
