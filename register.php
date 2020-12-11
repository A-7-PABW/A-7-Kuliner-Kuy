<?php
require 'koneksi.php';

$koneksi = mysqli_connect("localhost","root","","okto_047");
 
if (isset($_POST["submit"])) {
	if( submit($_POST) > 0){
		echo  '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="register.php";
              </script>';
              exit();
	} else {
		echo  '<script language="javascript">
              alert ("Nama Sudah Ada Yang Menggunakan");
              window.location="register.php";
              </script>';
              exit();
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kuliner Kuy - Registrasi</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@900&family=Pacifico&display=swap" rel="stylesheet">
	<script type="text/javascript" src="register.js"></script>
</head>
<body>

	<!-- sidebar -->
		<input type="checkbox" id="check">
		<div class="sidebar">
			<ul>
				<li><a href="Tentang1.html">Tentang Kami</a></li>
				<li><a href="kuliner.php">Kuliner</a></li>
				<li><a href="kontak.html">Hubungi Kami</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>

		<!-- bagian header -->
		<header>
			<div class="container">
				<h1><a href="index.html">Kuliner Kuy</a></h1>
				<ul>
					<li><a href="Tentang1.html">Tentang Kami</a></li>
					<li><a href="kuliner.php">Kuliner</a></li>
					<li><a href="kontak.html">Hubungi Kami</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>

				<!-- menu hamburger -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>

	<div class="registrasi">
		<form method="POST">
		<table class="table">
			<tr>
				<td colspan="3"><h1 class="judul">Kuliner Kuy</h1></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" id="nama" placeholder="Masukkan nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email" placeholder="Masukkan email"></td>
			</tr>
			<tr>
				<td>Kata Sandi</td>
				<td><input type="password" name="password" id="pass" placeholder="Masukkan kata sandi"></td>
			</tr>
			<tr>
				<td>Ulangi <div>Kata Sandi</div></td>
				<td><input type="password" name="konfir" class="col-6" id="konfir" placeholder="Ulangi kata sandi"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button onclick="Save()" type="submit" name="submit">Registrasi</button>
				</td>
			</tr>
		</table>
		</form>
	</div>

	</div>
			<footer>
			<div class="container">
				<small>Copyright &copy; 2020 - Team 7 PABW.</small>
			</div>
		</footer>

</body>
</html>