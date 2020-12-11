function Save() {
	var nama = document.getElementById("nama").value;
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var konfir = document.getElementById("konfir").value;

	if (nama === "") {
		alert("Nama wajib diisi");
	} else if (email === "") {
		alert("Email wajib diisi");
	} else if (pass !== konfir) {
		alert("Kata sandi tidak sesuai");
	} else if (pass === "" && konfir === "") {
		alert("Kata sandi wajib diisi");
	} else {
		var lanjut = window.confirm("Apakah anda yakin?");
		if (lanjut === true) {
			document.location.href = "index.html";
		}
	}
}