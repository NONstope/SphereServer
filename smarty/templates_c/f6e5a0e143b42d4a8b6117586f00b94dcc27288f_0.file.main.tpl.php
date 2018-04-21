<?php
/* Smarty version 3.1.30, created on 2018-04-21 17:37:41
  from "C:\wamp64\www\statserver\smarty\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adb76e5ca6ab2_54593397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6e5a0e143b42d4a8b6117586f00b94dcc27288f' => 
    array (
      0 => 'C:\\wamp64\\www\\statserver\\smarty\\templates\\main.tpl',
      1 => 1524332256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adb76e5ca6ab2_54593397 (Smarty_Internal_Template $_smarty_tpl) {
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
          <li><a href="view-about.php">About</a></li>
          <li><a href="logic-exit.php">Exit</a></li>
        </ul>
      </div>
    </nav>

    <main>
        <div class="container">
          <h3>All apps list</h3>
          <p>You can navigate by the first letter of the programm you need</p>
        </div>
        <div class="container">
            <button onclick="location.href='main.php?first=a'">A</button>
            <button onclick="location.href='main.php?first=b'">B</button>
            <button onclick="location.href='main.php?first=c'">C</button>
            <button onclick="location.href='main.php?first=d'">D</button>
            <button onclick="location.href='main.php?first=e'">E</button>
            <button onclick="location.href='main.php?first=f'">F</button>
            <button onclick="location.href='main.php?first=g'">G</button>
            <button onclick="location.href='main.php?first=h'">H</button>
            <button onclick="location.href='main.php?first=i'">I</button>
            <button onclick="location.href='main.php?first=j'">J</button>
            <button onclick="location.href='main.php?first=k'">K</button>
            <button onclick="location.href='main.php?first=l'">L</button>
            <button onclick="location.href='main.php?first=m'">M</button>
            <button onclick="location.href='main.php?first=n'">N</button>
            <button onclick="location.href='main.php?first=o'">O</button>
            <button onclick="location.href='main.php?first=p'">P</button>
            <button onclick="location.href='main.php?first=q'">Q</button>
            <button onclick="location.href='main.php?first=r'">R</button>
            <button onclick="location.href='main.php?first=s'">S</button>
            <button onclick="location.href='main.php?first=t'">T</button>
            <button onclick="location.href='main.php?first=u'">U</button>
            <button onclick="location.href='main.php?first=v'">V</button>
            <button onclick="location.href='main.php?first=w'">W</button>
            <button onclick="location.href='main.php?first=x'">X</button>
            <button onclick="location.href='main.php?first=y'">Y</button>
            <button onclick="location.href='main.php?first=z'">Z</button>
            <button onclick="location.href='main.php?first=*'">Other</button>
        </div>
        <div id="app-list" class="container">
            <p id="app-first-char"><?php echo $_smarty_tpl->tpl_vars['first']->value;?>
</p>
            <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apps']->value, 'app');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
?>
                    <form>
                        <a href="view-app.php?appid=<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</a>
                    </form>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php } else { ?>
                <p>No apps found. Choose another letter.</p>
            <?php }?>
        </div>
    </main>
</body>
</html><?php }
}
