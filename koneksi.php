<?php 
	
	$koneksi = mysqli_connect("localhost","root","","okto_047");
	$konek1 = mysqli_connect("localhost","root","","okto_047");
	$konek2 = mysqli_connect("localhost","root","","okto_047");
	$konek3 = mysqli_connect("localhost","root","","okto_047");
	$konek4 = mysqli_connect("localhost","root","","okto_047");

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
/*----------------------bagian 3--------------*/
	function query3($query) {
	global $konek3;
	$result = mysqli_query($konek3, $query);
	$rows3 = [];
	while( $row3 = mysqli_fetch_assoc($result)) {
		$rows3[] = $row3;
	}
	return $rows3;
	}

	function submit3($register3) {
	global $konek3;

	$nama = $register3["nama"];
	$komen = $register3["komen"];
	$euw = "INSERT INTO ulasan3 VALUES ('', '$nama', '$komen')";

	mysqli_query($konek3, $euw);

	return mysqli_affected_rows($konek3);
	}

/*----------------------bagian 4--------------*/
	function query4($query) {
	global $konek4;
	$result = mysqli_query($konek4, $query);
	$rows4 = [];
	while( $row4 = mysqli_fetch_assoc($result)) {
		$rows4[] = $row4;
	}
	return $rows4;
	}

	function submit4($register4) {
	global $konek4;

	$nama = $register4["nama"];
	$komen = $register4["komen"];
	$euw = "INSERT INTO ulasan4 VALUES ('', '$nama', '$komen')";

	mysqli_query($konek4, $euw);

	return mysqli_affected_rows($konek4);
	}

 ?>