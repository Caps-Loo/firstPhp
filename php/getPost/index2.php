<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/kedua.jpg" alt=""></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["email"] ?></li>
        <li><?= $_GET["kelas"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
    </ul>

    <a href="index.php">Kembali</a>
</body>
</html>