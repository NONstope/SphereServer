<?php
require_once("configs/config-smarty.php");

$smarty->assign("message", "Hello");
$smarty->display("index.tpl");

?>