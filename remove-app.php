<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");
session_start();

$appid = $_POST["appid"];
mysqli_query($conn, "DELETE FROM apps WHERE id = '$appid'");

header("Location: main.php?first=a");
exit();

?>