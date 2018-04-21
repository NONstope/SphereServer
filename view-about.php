<?php
require_once("configs/config-smarty.php");
session_start();

$smarty->display("view-about.tpl");

?>