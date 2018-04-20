function validate() {
	if ($("#login-login").val() == ""
		| $("#login-login").val().length < 5
		| $("#login-login").val().length > 32) {
		alert("Invalid login");
	} else if ($("#login-passw").val() == ""
		| $("#login-passw").val().length < 5
		| $("#login-passw").val().length > 32) {
		alert("Invalid password");
	}
}