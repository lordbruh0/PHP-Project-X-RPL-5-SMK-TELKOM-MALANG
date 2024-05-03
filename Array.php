<?php
$array_fruits = array('Apple', 'Orange', 'Watermelon', 'Mongo');




//cara menginisialisasi array

$array = array();

//array diinisialisasi dengan array kosong
$array = [];

//menambahaknan variable ke array
$array = [];
$array[] = 'one';
$array []=  'two';
$array []=  'three';
echo '<pre>';
print_r($array);

//mengakses elemen array
    $array = ['one', 'two', 'three'];

    echo $array[0];
    echo "<br>";

    echo $array[1];
    echo "<br>";

    echo $array[2];
    echo "<br>";


    //mengunakan perulangan for each
    $array=['one', 'two', 'three'];
    foreach($array as $element){
        echo $element;
        echo '<br>';
    }

    //menggunakan perulangan for 
    $array = ['One', 'Two', 'Three'];
$array_length = count($array);
 
for ($i = 0; $i < $array_length; ++$i) {
echo $array[$i];
echo '<br>';
}
//jenis array

//1. array berindex numerik
$array = ['one', 'two', 'three'];

$array = [];
$array[] = 'one';
$array []=  'two';
$array []=  'three';
echo '<pre>';
print_r($array);

//2. array asosiatif
$employee = [
    'name' => 'john',
    'email' => 'john@example.com',
    'phone' => '1234567890',

];

$employee = [];
$employee['name'] = 'john';
$employee['email'] = 'john@example.com';
$employee['phone'] = '1234567890';


//Untuk mengakses nilai-nilai array asosiatif, Kalian dapat menggunakan indeks atau perulangan dari foreach.
$employee = [
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
];

// get the value of employee name
echo $employee['name'];

// get all values
foreach ($employee as $key => $value) {
 echo $key . ':' . $value;
 echo '<br>';
}

//3. array multidimensi
$employee = [
    'name'=> 'john',
    'email'=> 'john@example.com',
    'phone'=> '1234567890',
    'hobbies'=> ['football', 'tennis'],
    'profiles'=> ['facebook' => 'johnfb', 'twitter' => 'johntw']
];

// access hobbies
echo $employee['hobbies'][0];
// Football
 
echo $employee['hobbies'][1];
// Tennis
 
// access profiles
echo $employee['profiles']['facebook'];
// johnfb
 
echo $employee['profiles']['twitter'];
// johntw


?>


