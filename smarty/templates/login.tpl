<!DOCTYPE html>
<html>
<head>
    <title>Sphere</title>
    <link rel="stylesheet" type="text/css" href="styles-css/signing.css"/>
</head>
<body>
    <form id="login">
        Login:<input id="login-login" type="text" name="login" required />
        Password:<input id="login-passw" type="password" name="pass" required />
        <span>
            <input type="button" value="Log in" onclick="tryLogin();" />
            <input type="button" value="Register" onclick="location.href='view-register.php'" />
        </span>
    </form>

    <script type="text/javascript" src="javascript/jquery.js"></script>
    <script type="text/javascript" src="javascript/login.js"></script>
</body>
</html>