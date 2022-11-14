<?php
$conn = mysqli_connect("localhost", "root", "", "db1");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;

}

function cari($nama, $alamat, $hobi) {
    $query = "SELECT person.nama, person.alamat, hobi.hobi FROM person, hobi WHERE person.id = hobi.person_id AND 
	person.nama LIKE '%$nama%' AND
	person.alamat LIKE '%$alamat%'AND
	hobi.hobi LIKE '%$hobi%'";
    return query($query);
}

$profil = query("SELECT person.nama, person.alamat, hobi.hobi FROM person, hobi WHERE person.id = hobi.person_id ");

if (isset($_POST["cari"])) {
	$profil = cari($_POST["nama"], $_POST["alamat"], $_POST["hobi"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0" class="left bottom">
	<tr>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Hobi</th>
	</tr>
		<?php foreach ($profil as $pro) : ?>
	<tr>
		<td><?= $pro["nama"]; ?></td>
		<td><?= $pro["alamat"]; ?></td>
		<td><?= $pro["hobi"]; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<br>
<form action="" method="post">
	<div>
		Nama :
		<input class="cari" type="text" name="nama" size="30" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off" id="nama">
	</div>
	<div>
		Alamat :
		<input class="cari" type="text" name="alamat" size="30" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off" id="alamat">
	</div>
	<div>
		Hobi :
		<input class="cari" type="text" name="hobi" size="30" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off" id="hobi">
	</div>
	<br>
	<button type="submit" name="cari" id="tombol-cari" class="btn-cari">Cari</button>
</form>
</body>
</html>