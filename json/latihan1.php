<?php

// $mahasiswa = [
//     [
//         "nama" => "Ramelsi",
//         "umur" => "21", 
//         "email" => "ramelsi@gmail.com"
//     ],
//     [
//         "nama" => "Fadhila",
//         "umur" => "22",
//         "email" => "fadhila@gmail.com"
//     ],
//     [
//         "nama" => "Shennanore",
//         "umur" => "22",
//         "email" => "shennanore@gmail.com"
//     ]      
// ];

header('Content-Type: application/json');


$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>