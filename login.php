<?php 

	require 'koneksi.php';

	if( isset($_POST["login"]) ){
		$email = $_POST["email"];
		$password = $_POST["password"];
  
		$result = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");

	if (mysqli_num_rows($result) === 1 ){
		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"]) ){
			header("Location: register.php");
			exit;
		}
	}
		$error = true;
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kuliner Kuy - Masuk</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@900&family=Pacifico&display=swap" rel="stylesheet">
	<script type="text/javascript" src="login.js"></script>

</head>
<body>
	<?php if(isset($error) ) : ?>
		<p style = "color: red; font-style:italic;"> Username atau password salah!</p>
	<?php endif; ?>

	<!-- sidebar -->
		<input type="checkbox" id="check">
		<div class="sidebar">
			<ul>
				<li><a href="Tentang1.html">Tentang Kami</a></li>
				<li><a href="kuliner.php">Kuliner</a></li>
				<li><a href="kontak.html">Hubungi Kami</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</div>

		<!-- bagian header -->
		<header>
			<div class="container">
				<h1 style="font-size: "><a href="index.html">Kuliner Kuy</a></h1>
				<ul>
					<li><a href="Tentang1.html">Tentang Kami</a></li>
					<li><a href="kuliner.php">Kuliner</a></li>
					<li><a href="kontak.html">Hubungi Kami</a></li>
					<li><a href="#">Login</a></li>
				</ul>

				<!-- menu hamburger -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>

	<div class="masuk">
		<form action="" method="post">
		<table class="table">
			<tr>
				<td colspan="3"><h1 class="judul">Kuliner Kuy</h1></td>
			</tr>
			<tr>
				<td>Email</td>
			</tr>
			<tr>
				<td><input  for="email" type="text" name="email" id="email" placeholder="Masukkan email"></td>
			</tr>
			<tr>
				<td>Kata sandi</td>
			</tr>
			<tr>

				<td><input for="password" type="password" name="password" id="password" placeholder="Masukkan kata sandi"></td>

			</tr>
			<tr>
				<td colspan="3"><button onclick="Masuk()" type="login" name="login">Masuk</button></td>
			</tr>
			<tr>
				<td colspan="3" id="registerlink"><p class="register">Belum daftar? <a href="register.php">Buat akun sekarang</a></p></td>
			</tr>
		</table>
		</form>
	</div>
			<footer>
			<div class="container">
				<small>Copyright &copy; 2020 - Team 7 PABW.</small>
			</div>
		</footer>
</body>
</html>