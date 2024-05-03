<?php
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Siswa</title>
<style>
    .siswa-box {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 10px;
        width: 300px;
        font-weight: 500;
    }
</style>
</head>
<body>
    <?php foreach ($siswa as $data): ?>
        <div class="siswa-box">
            <b><p> <?php echo $data['nama']; ?></p></b>
            <p> <?php echo $data['kelas']."-".$data['jurusan'] ?></p>
        
        </div>
    <?php endforeach; ?>
</body>
</html>
