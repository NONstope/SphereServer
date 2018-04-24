<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");
session_start();

$key = explode("+", $_POST["bug"]);
$user_id = $key[0];
$app_id = $key[1];
mysqli_query($conn, "DELETE FROM bugs WHERE user_id = '$user_id' AND app_id = '$app_id'");

header("Location: ".$_SERVER['HTTP_REFERER']);

?>