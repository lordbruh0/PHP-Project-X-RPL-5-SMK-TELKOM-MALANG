<?php
$teman = "andi";
if($teman == "andi"){
    echo "dia adalah teman saya";
    
}else{
    echo "dia bukan teman saya";
}

//kode di atas adalah kode if - else

$angka = 3;
switch($angka){
    case 1:
        echo "isi variable adalah 1";
        break;
    case 2:
        echo "isi variable adalah 2";
        break;
    case 3:
        echo "isi variable adalah 3";
        break;
    case 4:
        echo "isi variable adalah 4";
        break;
    case 5:
        echo "isi variable adalah 5";
        break;
    case 6:
        echo "isi variable adalah 6";
        break;

        //kode di atas adalah kode switch

        $x = 1;
        while($x <= 10){
            echo "Angka $x <br>";
            $x++;
        }
        //kode perulangan while

        for($x=1; $x<=10; $x++){
            echo $x;
        }
}
?>