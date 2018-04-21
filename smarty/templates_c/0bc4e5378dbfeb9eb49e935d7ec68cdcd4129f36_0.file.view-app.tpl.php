<?php
/* Smarty version 3.1.30, created on 2018-04-21 13:12:17
  from "C:\wamp64\www\statserver\smarty\templates\view-app.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adb38b1287422_78901461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc4e5378dbfeb9eb49e935d7ec68cdcd4129f36' => 
    array (
      0 => 'C:\\wamp64\\www\\statserver\\smarty\\templates\\view-app.tpl',
      1 => 1524316334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adb38b1287422_78901461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sphere</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles-css/bootstrap.min.css">
    <link rel="stylesheet" href="styles-css/main.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Sphere</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="main.php?first=a">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="logic-exit.php">Exit</a></li>
        </ul>
      </div>
    </nav>

    <main>
        <div id="view-app-desc" class="container">
          <h3>Info about <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</h3>
          <p>Average mark:
              <?php if ($_smarty_tpl->tpl_vars['mark_avg']->value['value'] == NULL) {?>
                  0
              <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['mark_avg']->value['value'];?>

              <?php }?>
          </p>
          <p>Bugs found: <?php echo $_smarty_tpl->tpl_vars['bugs_amt']->value['value'];?>
</p>
        </div>
    </main>
</body>
</html><?php }
}