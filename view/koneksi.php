<?php 
$host ='localhost';
$username='root';
$password='';
$db_name='furniture';

$koneksi=mysqli_connect($host,$username,$password,$db_name);

if(!$koneksi){
	echo'koneksi gagal';
}