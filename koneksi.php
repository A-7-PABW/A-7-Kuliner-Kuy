<?php 
	
	$koneksi = mysqli_connect("localhost","root","","okto_047");
	$konek1 = mysqli_connect("localhost","root","","okto_047");
	$konek2 = mysqli_connect("localhost","root","","okto_047");

/*----------------------bagian 1--------------*/
	function submit($register) {
	global $koneksi;

	$email = $register["email"];
	$nama = $register["nama"];
	$password = $register["password"];

	$inputregister = "INSERT INTO user VALUES ('$email', '$nama', '$password')";

	mysqli_query($koneksi, $inputregister);

	return mysqli_affected_rows($koneksi);
	}

	function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
	}

	function submit1($register1) {
	global $konek1;

	$nama = $register1["nama"];
	$komen = $register1["komen"];
	$euw = "INSERT INTO ulasan1 VALUES ('', '$nama', '$komen')";

	mysqli_query($konek1, $euw);

	return mysqli_affected_rows($konek1);
	}

/*----------------------bagian 2--------------*/

	function query1($query) {
	global $konek2;
	$result = mysqli_query($konek2, $query);
	$rows2 = [];
	while( $row2 = mysqli_fetch_assoc($result)) {
		$rows2[] = $row2;
	}
	return $rows2;
	}

	function submit2($register2) {
	global $konek2;

	$nama = $register2["nama"];
	$komen = $register2["komen"];
	$euw = "INSERT INTO ulasan2 VALUES ('', '$nama', '$komen')";

	mysqli_query($konek2, $euw);

	return mysqli_affected_rows($konek2);
	}
 ?>