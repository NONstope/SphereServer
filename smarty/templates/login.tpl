<!DOCTYPE html>
<html>
<head>
	<title>Sphere</title>
	<link rel="stylesheet" type="text/css" href="styles-css/main.css"/>
</head>
<body>
	<form id="login" action="login.php" method="post">
		<input id="login-login" type="text" name="login" required />
		<input id="login-passw" type="password" name="pass" required />
		<span>
			<input type="submit" value="Log in" />
			<input type="button" value="Register" onclick="location.href='register.php'" />
		</span>
	</form>

	<script type="text/javascript" src="javascript/jquery.js"></script>
</body>
</html>