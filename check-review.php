<?php
require_once("configs/config-db.php");

$username = $_POST["username"];
$user = mysqli_query($conn, "SELECT * FROM users WHERE login = '$username'");
$user_id = mysqli_fetch_assoc($user)["id"];
$appname = $_POST["appname"];
$app = mysqli_query($conn, "SELECT * FROM apps WHERE name = '$appname'");
$app_id = mysqli_fetch_assoc($app)["id"];
$res = mysqli_query($conn, "SELECT * FROM reviews WHERE user_id = $user_id AND app_id = $app_id");
$res = mysqli_fetch_assoc($res);

echo !empty($res) ? "Presence" : "Absence";

?>