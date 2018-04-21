function tryLogin() {
    if ($("#login-login").val() == ""
        | $("#login-login").val().length < 5
        | $("#login-login").val().length > 32) {
        alert("Invalid login length");
    } else if ($("#login-passw").val() == ""
        | $("#login-passw").val().length < 5
        | $("#login-passw").val().length > 32) {
        alert("Invalid password length");
    } else {
        $.post("logic-login.php",
            { login: $("#login-login").val(),
              pass : $("#login-passw").val() },
              function(data) {
                  switch (data) {
                    case "Failed":
                        alert("Incorrect login or password");
                        break;
                    case "Success":
                        location.href = "main.php?first=a";
                        break;
                  }
              });
    }
}