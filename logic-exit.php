<?php
require_once("configs/config-smarty.php");
session_start();

unset($_SESSION["user_id"]);
unset($_SESSION["user_md"]);

$smarty->display("login.tpl");

?>