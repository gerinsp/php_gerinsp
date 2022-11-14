<?php
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
<form action="soal2c.php" method="get">
    <div>
    Umur Anda :
    <input type="text" name="umur">
    </div>
    <input type="hidden" name="nama" value="<?= $nama ?>">
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>