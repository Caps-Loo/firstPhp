<?php

//global scope

// $x = 10;
// function showX(){
//     global $x; 
//     echo $x;
// }
// showX();

//super globalScope

// echo $_SERVER["REQUEST_METHOD"];

// $_GET

$students = [
    [
        "nama" => "Ridwan",
        "email" => "ridwan@gmail.com",
        "kelas" => "XIII",
        "jurusan" => "SIJA",
        "gambar" => "pertama.jpg",
    ],
    [
        "nama" => "Budi",
        "email" => "budi@gmail.com",
        "kelas" => "XII",
        "jurusan" => "RPL",
        "gambar" => "kedua.jpg",
    ]
];

// $_GET["nama"] = "Budis";
// var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Siswa</h1>
    <ul>
        <?php foreach ($students as $student) : ?>
            <li>
                <a href="index2.php?nama= <?= $student["nama"] ?> 
                & email= <?= $student["email"]; ?> 
                & kelas= <?= $student["kelas"]; ?> 
                & jurusan= <?= $student["jurusan"]; ?>
                & gambar= <?= $student["gambar"]; ?> "> 
                <?= $student["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>