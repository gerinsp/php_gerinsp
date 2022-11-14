<?php
$umur = $_GET['umur'];
$nama = $_GET['nama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<form action="soal2d.php" method="get">
    <div>
    Hobi Anda :
    <input type="text" name="hobi">
    </div>
    <input type="hidden" name="nama" value="<?= $nama ?>">
    <input type="hidden" name="umur" value="<?= $umur ?>">
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>