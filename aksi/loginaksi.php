<?php

session_start();
include('../view/koneksi.php');

$koneksi = mysqli_connect("localhost","root","","furniture");
$username = $_POST['Username'];
$password = $_POST['Password'];

$sql = "select * from register where username ='$username' && password='$password';";
$user = mysqli_query($koneksi,$sql);

if (mysqli_num_rows($register) > 0 ) {

	$_SESSION['userdata']['username'] = $username;
	$_SESSION['userdata']['role'] = '';
	header('location:../dashboard.html');
}else{
	echo 'login gagal';
}