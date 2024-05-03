<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .data-item {
            margin-bottom: 10px;
        }

        .data-label {
            font-weight: bold;
        }

        .data-value {
            margin-left: 10px;
        }

        .btn-back {
            display: block;
            width: 100px;
            margin: 20px auto 0;
            text-align: center;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pengguna</h2>
        <div class="data-item">
            <span class="data-label">Nama:</span>
            <span><?php echo $_POST['Nama']; ?></span>
        </div>
        <div class="data-item">
            <span class="data-label">Jenis Kelamin:</span>
            <span><?php echo $_POST['JenisKelamin']; ?> </span>
        </div>
        <div class="data-item">
            <span class="data-label">Agama:</span>
            <span><?php echo $_POST['Agama']; ?></span>
        </div>
        <div class="data-item">
            <span class="data-label">Alamat:</span>
            <span><?php echo $_POST['Alamat']; ?></span>
        </div>
        <div class="data-item">
            <span class="data-label">Tempat Lahir:</span>
            <span><?php echo $_POST['TempatLahir']; ?></span>
        </div>
        <div class="data-item">
            <span class="data-label">Tanggal Lahir:</span>
            <span><?php echo $_POST['TanggalLahir']; ?></span>
        </div>
        <div class="data-item">
            <span class="data-label">Hobi:</span>
            <span><?php echo $_POST['Hobi']; ?> </span>
        </div>
        <div class="data-item">
            <span class="data-label">Cita-cita:</span>
            <span><?php echo $_POST['Cita']; ?></span>
        </div>
        <div class="data-item">
            <span class="data-label">Usia:</span>
            <span><?php echo $_POST['Usia']; ?></span>
        </div>
        <div class="data-item">
            <span class="data-label">Asal Sekolah:</span>
            <span><?php echo $_POST['AsalSekolah']; ?></span>
        </div>
        <a href="javascript:history.back()" class="btn-back">Kembali</a>
    </div>
</body>
</html>
