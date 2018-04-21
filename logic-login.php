<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");

$login = $_POST["login"];
$user = mysqli_query($conn, "SELECT * FROM users WHERE login = '$login'");
$user = mysqli_fetch_assoc($user);
$admin = mysqli_query($conn, "SELECT * FROM admins WHERE login = '$login'");
$admin = mysqli_fetch_assoc($admin);

if (empty($user) && empty($admin)) {
    echo "Failed";
} else if (!empty($user)) {
    $salt = $user["salt"];
    $pass = md5(md5(md5($salt).md5($_POST["pass"])));
    if ($pass == $user["pass"]) {
        session_start();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_md"] = "user";
        echo "Success";
    } else {
        echo "Failed";
    }
} else {
    $salt = $admin["salt"];
    $pass = md5(md5(md5($salt).md5($_POST["pass"])));
    if ($pass == $admin["pass"]) {
        session_start();
        $_SESSION["user_id"] = $admin["id"];
        $_SESSION["user_md"] = "admin";
        echo "Success";
    } else {
        echo "Failed";
    }
}

?>