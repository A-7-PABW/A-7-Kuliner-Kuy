<?php
require 'koneksi.php';

$ulasan1 = query("SELECT * FROM ulasan1");
$ulasan2 = query("SELECT * FROM ulasan2");
$ulasan3 = query("SELECT * FROM ulasan3");
$ulasan4 = query("SELECT * FROM ulasan3");

$konek1 = mysqli_connect("localhost","root","","okto_047");
$konek2 = mysqli_connect("localhost","root","","okto_047");
$konek3 = mysqli_connect("localhost","root","","okto_047");
$konek4 = mysqli_connect("localhost","root","","okto_047");

if (isset($_POST["submit1"])) {
  if( submit1($_POST) > 0){
    echo  '<script language="javascript">
              alert ("Komentar berhasil ditambahkan");
              window.location="kuliner.php";
              </script>';
              exit();
  } else {
    echo  '<script language="javascript">
              alert ("Komentar tidak bisa ditambahkan");
              window.location="kuliner.php";
              </script>';
              exit();
  }
}

if (isset($_POST["submit2"])) {
  if( submit2($_POST) > 0){
    echo  '<script language="javascript">
              alert ("Komentar berhasil ditambahkan");
              window.location="kuliner.php";
              </script>';
              exit();
  } else {
    echo  '<script language="javascript">
              alert ("Komentar tidak bisa ditambahkan");
              window.location="kuliner.php";
              </script>';
              exit();
  }
}

if (isset($_POST["submit3"])) {
  if( submit3($_POST) > 0){
    echo  '<script language="javascript">
              alert ("Komentar berhasil ditambahkan");
              window.location="kuliner.php";
              </script>';
              exit();
  } else {
    echo  '<script language="javascript">
              alert ("Komentar tidak bisa ditambahkan");
              window.location="kuliner.php";
              </script>';
              exit();
  }
}

if (isset($_POST["submit4"])) {
  if( submit4($_POST) > 0){
    echo  '<script language="javascript">
              alert ("Komentar berhasil ditambahkan");
              window.location="kuliner.php";
              </script>';
              exit();
  } else {
    echo  '<script language="javascript">
              alert ("Komentar tidak bisa ditambahkan");
              window.location="kuliner.php";
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
		<title>KulinerKuy.com</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@900&family=Pacifico&display=swap" rel="stylesheet">
	</head>
	<body>
		
		<!-- sidebar -->
		<input type="checkbox" id="check">
		<div class="sidebar">
			<ul>
				<li><a href="Tentang.html">Tentang Kami</a></li>
				<li><a href="#">Kuliner</a></li>
				<li><a href="kontak.html">Hubungi Kami</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>

		<!-- bagian header -->
		<header>
			<div class="container">
				<h1><a href="index.html">Kuliner Kuy</a></h1>
				<ul>
					<li><a href="Tentang.html">Tentang Kami</a></li>
					<li><a href="#">Kuliner</a></li>
					<li><a href="kontak.html">Hubungi Kami</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>

				<!-- menu hamburger -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>

		<section class="banner4">
			<div class="container">
				<div class="kuliner">
					<h2>Temukan Kuliner yang anda cari! </h2>
					<p style="float: left;">Yang disukai & direview tertinggi makanan di Yogyakarta!</p>						
				</div>
			</div>
		</section>

		<section class="kuliner1">
  <div class="card1">
    <a href="#sampah" class="isi1">
      <div>
        <h1>Soto Sampah</h1>
        <div class="tags">
          <div class="tag">Selengkapnya</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card1">
    <a href="#klotok" class="isi2">
      <div>
        <h1>Kopi Klotok</h1>
        <div class="tags">
          <div class="tag">Selengkapnya</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card1">
    <a href="#merapi" class="isi3">
      <div>
        <h1>Kopi Merapi</h1>      
        <div class="tags">
          <div class="tag">Selengkapnya</div>
        </div>
      </div>
    </a>
  </div>
   <div class="card1">
    <a href="#gudeg" class="isi4">
      <div>
        <h1>Soto Sampah</h1>
        <div class="tags">
          <div class="tag">Selengkapnya</div>
        </div>
      </div>
    </a>
  </div>
</section>  

<section id="sampah">
<div class="makanan">
  <div class="card u-clearfix">
    <div class="card-body">
      <span class="card-number card-circle subtle">01</span>
      <span class="card-author subtle">Jl. Kranggan No.2, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233</span>
      <h2 class="card-title">Soto Sampah</h2>
      <span class="card-description subtle">Soto sampah merupakan nama pemberian dari para pengunjung yang dahulu kerap membeli soto di sini. "Dinamakan soto "sampah" oleh para pengunjung karena penyajiannya berantakan.<br>Harga : 1 Porsi Rp.6000 / Gorengan 1 = Rp.1000</span>
    </div>
    <img src="img/sampah.jpg" alt="" class="card-media" />
  </div><br>
  <div class="komentar">
    <center>
      <h2> Komentar</h2>
      <table  cellspacing="10" >
    <tr>
      <td>Nama</td>
      <td>Komentar</td> 
    </tr>

    <?php foreach( $ulasan1 as $row ) : ?>
    <tr>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["komen"]; ?></td> 
    </tr>
  <?php endforeach; ?>

  </table>
  <form method="POST">
    <br><br>
   <label for="">Komentar:</label>
    <br>
   <input type="text" name="nama" class="input-text" placeholder="Masukkan Nama Anda" required/>
    <input type="text" name="komen" class="input-text" placeholder="Masukkan Komentar Anda" required/>
          <button onclick="Save()" type="submit1" name="submit1">tambahkan Komentar</button>
  </form>
  </center>
  </div>
</div>
</section>

<section id="klotok">
<div class="makanan">
  <div class="card u-clearfix">
    <div class="card-body">
      <span class="card-number card-circle subtle">02</span>
      <span class="card-author subtle">Jalan Kaliurang No.KM.16, Area Sawah, Pakembinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582</span>
      <h2 class="card-title">Kopi Klotok</h2>
      <span class="card-description subtle">Bagi yang hobi kuliner Jawa dan tradisional, tidak ada salahnya mampir ke Warung Kopi Klotok Pakem. Di sini tersedia masakan tradisional Jawa. Spesial menu yang ada adalah Kopi Klotok dan Pisang Goreng. <br> Harga : Kopi secangkir Rp.5000 <br>
      Harga untuk menu lainnya kisaran dari Rp.5000 - Rp20.000</span>
    </div>
    <img src="img/klotok.jpg" alt="" class="card-media" />
  </div><br>
  <div class="komentar">
    <center>
      <h2> Komentar</h2>
      <table  cellspacing="10" >
    <tr>
      <td>Nama</td>
      <td>Komentar</td> 
    </tr>

    <?php foreach( $ulasan2 as $row2 ) : ?>
    <tr>
      <td><?= $row2["nama"]; ?></td>
      <td><?= $row2["komen"]; ?></td> 
    </tr>
  <?php endforeach; ?>

  </table>
  <form method="POST">
    <br><br>
   <label for="">Komentar:</label>
    <br>
   <input type="text" name="nama" class="input-text" placeholder="Masukkan Nama Anda" required/>
    <input type="text" name="komen" class="input-text" placeholder="Masukkan Komentar Anda" required/>
          <button onclick="Save()" type="submit2" name="submit2">tambahkan Komentar</button>
  </form>
  </center>
  </div>
</div>
</section>

<section id="merapi">
<div class="makanan">
  <div class="card u-clearfix">
    <div class="card-body">
      <span class="card-number card-circle subtle">03</span>
      <span class="card-author subtle">Kepuharjo, Cangkringan, Petung, Kepuharjo, Kec. Cangkringan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55583</span>
      <h2 class="card-title">Kopi Merapi</h2>
      <span class="card-description subtle">Menyediakan beragam pilihan kopi, Warung Kopi Merapi hadirkan suasana syhadu khas lereng gunung. Bisa jadi salah satu tempat alternatif untuk bersantai asyik bersama sahabat maupun sosok terkasih.<br>Harga : Kopi Merapi Rp.3000 <br>Harga untuk emnu lainnya cukup merakyat kisaran dari Rp.3000 - Rp.12.0000 <br> Buka Pukul : 07.00 WIB - 02.00 Dini hari</span>
    </div>
    <img src="img/merapi.jpg" alt="" class="card-media" />
  </div><br>
  <div class="komentar">
    <center>
      <h2> Komentar</h2>
      <table  cellspacing="10" >
    <tr>
      <td>Nama</td>
      <td>Komentar</td> 
    </tr>

    <?php foreach( $ulasan3 as $row3 ) : ?>
    <tr>
      <td><?= $row3["nama"]; ?></td>
      <td><?= $row3["komen"]; ?></td> 
    </tr>
  <?php endforeach; ?>

  </table>
  <form method="POST">
    <br><br>
   <label for="">Komentar:</label>
    <br>
   <input type="text" name="nama" class="input-text" placeholder="Masukkan Nama Anda" required/>
    <input type="text" name="komen" class="input-text" placeholder="Masukkan Komentar Anda" required/>
          <button onclick="Save()" type="submit3" name="submit3">tambahkan Komentar</button>
  </form>
  </center>
</div>
</section>

<section id="gudeg">
<div class="makanan">
  <div class="card u-clearfix">
    <div class="card-body">
      <span class="card-number card-circle subtle">04</span>
      <span class="card-author subtle">Jalan janturan UH/IV No.36, Warungboto, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164</span>
      <h2 class="card-title">Gudeg Pawon</h2>
      <span class="card-description subtle">Dapur menjadi tempat krusial bagi rumah makan. Saking krusialnya, terkadang pengunjung tidak diizinkan untuk mendatangi tempat untuk memasak itu. Namun, berbeda dengan Gudeg Pawon yang malah mengharuskan semua pengunjungnya masuk ke dapur. <br>Harga : Seporsi Rp.24.000 / Komplit Rp.40.000 <br> Buka Pukul : 22.00 WIB - 00.00 WIB Setiap hari</span>
    </div>
    <img src="img/gudeg.jpg" alt="" class="card-media" />
  </div><br>
  <div class="komentar">
    <center>
      <h2> Komentar</h2>
      <table  cellspacing="10" >
    <tr>
      <td>Nama</td>
      <td>Komentar</td> 
    </tr>

    <?php foreach( $ulasan4 as $row4 ) : ?>
    <tr>
      <td><?= $row4["nama"]; ?></td>
      <td><?= $row4["komen"]; ?></td> 
    </tr>
  <?php endforeach; ?>

  </table>
  <form method="POST">
    <br><br>
   <label for="">Komentar:</label>
    <br>
   <input type="text" name="nama" class="input-text" placeholder="Masukkan Nama Anda" required/>
    <input type="text" name="komen" class="input-text" placeholder="Masukkan Komentar Anda" required/>
          <button onclick="Save()" type="submit4" name="submit4">tambahkan Komentar</button>
  </form>
  </center>
</div>
</section>

<!-- bagian footer -->
		<footer>
			<div class="container">
				<small>Copyright &copy; 2020 - Team 7 PABW.</small>
			</div>
		</footer>

		<script src="script.js"></script>

</body>
</html>   