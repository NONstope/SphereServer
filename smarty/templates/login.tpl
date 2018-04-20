<!DOCTYPE html>
<html>
<head>
	<title>Sphere</title>
	<link rel="stylesheet" type="text/css" href="styles-css/main.css"/>
</head>
<body>
	<form id="login" action="login.php" method="post">
		Login:<input id="login-login" type="text" name="login" required />
		Password:<input id="login-passw" type="password" name="pass" required />
		<span>
			<input type="submit" value="Log in" />
			<input type="button" value="Register" onclick="location.href='view-register.php'" />
		</span>
	</form>
</body>
</html>