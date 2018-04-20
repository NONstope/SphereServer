<?php
/* Smarty version 3.1.30, created on 2018-04-20 21:07:45
  from "C:\wamp64\www\statserver\smarty\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ada56a1ee4090_62825904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a6ea6806e0dbd1bbdcff56bb81ec7b2f7bb9dc' => 
    array (
      0 => 'C:\\wamp64\\www\\statserver\\smarty\\templates\\register.tpl',
      1 => 1524258458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ada56a1ee4090_62825904 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sphere</title>
	<link rel="stylesheet" type="text/css" href="styles-css/main.css"/>
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

	<?php echo '<script'; ?>
 type="text/javascript" src="javascript/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="javascript/register.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
