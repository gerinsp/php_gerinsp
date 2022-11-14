<?php
$nama = $_GET['nama'];
$umur = $_GET['umur'];
$hobi = $_GET['hobi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <li>Nama : <?= $nama; ?></li>
    <li>Umur : <?= $umur; ?></li>
    <li>Hobi : <?= $hobi; ?></li>
    </ul>
</body>
</html>