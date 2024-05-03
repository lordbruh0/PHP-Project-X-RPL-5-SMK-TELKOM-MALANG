<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir User</title>
    <style>
        select[name="JenisKelamin"],
input[type="date"] {
    width: calc(100% - 22px); /* 22px untuk scrollbar */
    width: 500px;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="post" action="tampilUser.php">
        <label>Nama:</label><br/>
        <input type="text" name="Nama"><br/>

        <label>Jenis Kelamin:</label><br/>
        <select name="JenisKelamin" id="" >
            
            <option value="Laki - Laki">Laki Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <!-- <label>Jenis Kelamin:</label><br/>
        <option value="JenisKelamin"></option>
        <input type="text" name="JenisKelamin"><br/>     -->

        <label>Agama:</label><br/>
        <input type="text" name="Agama"><br/>    

        <label>Alamat:</label><br/>
        <input type="text" name="Alamat"><br/>    

        <label>Tempat Lahir:</label><br/>
        <input type="text" name="TempatLahir"><br/>    

        <label>Tanggal Lahir:</label><br/>
        <input type="date" name="TanggalLahir"><br/>

        <label>Hobi:</label><br/>
        <input type="text" name="Hobi"><br/>    

        <label>Cita-cita:</label><br/>
        <input type="text" name="Cita"><br/>

        <label>Usia:</label><br/>
        <input type="text" name="Usia"><br/>    

        <label>Asal Sekolah:</label><br/>
        <input type="text" name="AsalSekolah"><br/>    

        <input type="submit" value="oke">
    </form>
</body>
</html>
