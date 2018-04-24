<?php
require_once("configs/config-db.php");

$login = $_POST["username"];
$user = mysqli_query($conn, "SELECT * FROM users WHERE login = '$login'");
$user = mysqli_fetch_assoc($user);

$appname = $_POST["appname"];
$app = mysqli_query($conn, "SELECT * FROM apps WHERE name = '$appname'");
$app = mysqli_fetch_assoc($app);

if (empty($app)) {
    mysqli_query($conn, "INSERT INTO apps (name) VALUES('$appname')");
    $app = mysqli_query($conn, "SELECT * FROM apps WHERE name = '$appname'");
    $app = mysqli_fetch_assoc($app);
}

$mark = $_POST["mark"];
$review = $_POST["review"];
$user_id = $user["id"];
$app_id = $app["id"];
mysqli_query($conn, "INSERT INTO reviews (user_id, app_id, mark, review) VALUES($user_id, $app_id, $mark, '$review')");

?>