<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai ulangan</title>
</head>
<body>
    <form action="" class="nilai">
        masukan nilai mu:
        <input type="text" class="nilai">
    </form>
</body>
</html>

<?php
$nilai = 12;

switch(true) {
    case $nilai <= 30:
        echo "E";
        break;
    case ($nilai > 30 && $nilai <= 40):
        echo "D";
        break;
    case ($nilai > 40 && $nilai <= 50):
        echo "C";
        break;
    case ($nilai > 50 && $nilai <= 60):
        echo "C+";
        break;
    case ($nilai > 60 && $nilai <= 70):
        echo "B";
        break;
    case ($nilai > 70 && $nilai <= 80):
        echo "B+";
        break;
    case ($nilai > 80 && $nilai <= 90):
        echo "A";
        break;
    case ($nilai > 90):
        echo "A+";
        break;
    default:
        echo "Nilai tidak sesuai kriteria";
}
?>
