<!DOCTYPE html>
<html>
<head>
    <title>Sphere</title>
    <link rel="stylesheet" type="text/css" href="styles-css/signing.css"/>
</head>
<body>
    <form id="login">
        Login:<input id="reg-login" type="text" name="login" required />
        Password:<input id="reg-passw" type="password" name="pass" required />
        Confirm:<input id="reg-passw-confirm" type="password" name="pass-confirm" required />
        <span>
            <input type="button" value="Register" onclick="tryRegister();" />
            <input type="button" value="Login" onclick="location.href='view-login.php'" />
        </span>
    </form>

    <script type="text/javascript" src="javascript/jquery.js"></script>
    <script type="text/javascript" src="javascript/register.js"></script>
</body>
</html>