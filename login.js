function Masuk() {
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;

	if (email === "") {
		alert("Email harus diisi");
	} else if (pass === "") {
		alert("Kata sandi salah");
	} else {
		document.location.href = "login.html"
	}
}