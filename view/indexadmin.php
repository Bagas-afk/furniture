<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<h2>Halaman Login</h2>
	<br>
	<?php
	session_start();

	if ($_SESSION['status']!="login") {
		header('location:../view/loginkaryawan.php?pesan=Belum login');
	?>

<h4>Selamat datang <?php echo $_SESSION ['username'];?> anda telah login</h4>
<a href="../../view/pemesan.php"><button>Data pemesan</button></a>||
<a href="../../view/karyawan"><button>Data karyawan</button></a>||
<br>
	
	<a href="../../aksi/login/logout.php"><button>Logout</button></a>


</body>
</html>