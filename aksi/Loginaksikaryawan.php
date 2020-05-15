<?php

session_start();

include('../view/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($user);


if($cek > 0){
		$_SESSION['username' ] = $username;
		$_SESSION['status']    = "login";
		header("location:../view/indexadmin.php");
	}else {
		header("location:../view/loginkaryawan.php?pesan=gagal");
	}
?>