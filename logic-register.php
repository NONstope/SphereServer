<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");

function salt() {
    $res = "";
    for ($i = 0; $i < 8; ++$i) {
        $res .= chr(mt_rand(55, 112));
    }
    return $res;
}

$login = $_POST["login"];
$res = mysqli_query($conn, "SELECT * FROM users WHERE login = '$login'");
$res = mysqli_fetch_assoc($res);

if (empty($res)) {
    $salt = salt();
    $pass = md5(md5(md5($salt).md5($_POST["pass"])));
    $dbgo = mysqli_query($conn, "INSERT INTO users (login, pass, salt) VALUES ('$login', '$pass', '$salt')");
}

echo !empty($res) || !$dbgo ? "Failed" : "Success";

?>