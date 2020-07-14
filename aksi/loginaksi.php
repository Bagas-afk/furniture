<?php

session_start();
include('../../view/koneksi.php');

$username = $_POST['Username'];
$password = $_POST['Password'];

$sql = mysqli_query ($koneksi, "select * from user where username ='$username' and password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0 ) {
	$_SESSION['username']= $username;
	$_SESSION['status']='login';
	header('location:../view/index.php');
}else{
	header('location:../view/index.php');
	echo 'login gagal';
}