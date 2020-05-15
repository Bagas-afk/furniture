<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="#">
	<title>Login</title>
</head>
<body>

	<?php

	include('../view/koneksi.php');
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "login gagal username atau password salah";
		}else if ($_GET['pesan']=="logout"){
			echo "anda berhasil logout";
		}else if ($_GET['pesan']=="Belum Login") {
			echo "anda belum bisa mengakses halaman admin";
		}
	}
	?>

	<h3>Form login</h3>
	<table>
	<form action="../aksi/loginkaryawan.php" method POST">
		<tr>
		<td>Username</td><td>:</td><td>
			<input type="text" name="username" placeholder="Masukan username anda"></td>
		</tr>

		<tr>
			<td>Password</td><td>:</td><td>
				<input type="password" name="password" placeholder="Masukan password anda">
			</td>
		</tr>

		<tr>
			<td><input type="submit" value="Login"></td>
		</tr>
</form>
</table>
</body>
</html>