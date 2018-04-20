function tryRegister() {
	if ($("#reg-login").val() == ""
		| $("#reg-login").val().length < 5
		| $("#reg-login").val().length > 32) {
		alert("Invalid login");
	} else if ($("#reg-passw").val() == ""
		| $("#reg-passw").val().length < 5
		| $("#reg-passw").val().length > 32) {
		alert("Invalid password");
	} else if ($("#reg-passw").val() !== $("#reg-passw-confirm").val()) {
		alert("Passwords are not equal");
	} else {
		$.post("logic-register.php",
			{ login: $("#reg-login").val(),
			  pass: $("#reg-passw").val() },
			  function(data) {
			      switch (data) {
			      	case "Failed":
			      		alert("Such login is already exists");
			      		break;
			      	case "Success":
			      		alert("Registration successful");
			      		location.href = "view-login.php";
			      		break;
			      }
			  });
	}
}