<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");
session_start();

$first_l = $_GET["first"];
$first_u = strtoupper($first_l);
if ($first_l != "*") {
    $apps_q = mysqli_query($conn, "SELECT * FROM apps WHERE name LIKE '$first_l%' OR '$first_u%'");
} else {
    $apps_q = mysqli_query($conn, "SELECT * FROM apps WHERE name LIKE '$first_l%' OR '$first_u%'");
}

while ($row = mysqli_fetch_assoc($apps_q)) {
    $apps[] = $row;
}

$smarty->assign("first", $first_u);
$smarty->assign("apps", isset($apps) ? $apps : array());
$smarty->display("main.tpl");

?>