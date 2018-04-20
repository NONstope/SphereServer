<?php
/* Smarty version 3.1.30, created on 2018-04-20 20:34:26
  from "C:\wamp64\www\statserver\smarty\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ada4ed2be4d95_65526335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '263087d250d77db43e8c6fc035b9c5aa57926339' => 
    array (
      0 => 'C:\\wamp64\\www\\statserver\\smarty\\templates\\login.tpl',
      1 => 1524256317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ada4ed2be4d95_65526335 (Smarty_Internal_Template $_smarty_tpl) {
?>
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

	<?php echo '<script'; ?>
 type="text/javascript" src="javascript/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="javascript/validation.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
