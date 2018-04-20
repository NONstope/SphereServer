<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");

$smarty->assign("message", "Hello");
$smarty->display("index.tpl");

?>