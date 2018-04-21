<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");
session_start();

$appid = $_GET['appid'];
$app = mysqli_query($conn, "SELECT * FROM apps WHERE id = '$appid'");
$app = mysqli_fetch_assoc($app);

if (!empty($app)) {
    $mark_avg = mysqli_query($conn, "SELECT AVG(value) AS value FROM marks WHERE app_id = $appid");
    $mark_avg = mysqli_fetch_assoc($mark_avg);
    $bugs_amt = mysqli_query($conn, "SELECT COUNT(value) AS value FROM reviews WHERE app_id = $appid");
    $bugs_amt = mysqli_fetch_assoc($bugs_amt);
    $bugs_l_q = mysqli_query($conn, "SELECT * FROM reviews INNER JOIN users ON user_id = users.id WHERE app_id = $appid");
    while ($row = mysqli_fetch_assoc($bugs_l_q)) {
        $bugs_lst[] = $row;
    }
    $smarty->assign("app", $app);
    $smarty->assign("mark_avg", $mark_avg);
    $smarty->assign("bugs_amt", $bugs_amt);
    $smarty->assign("bugs_lst", $bugs_lst);
    $smarty->display("view-app.tpl");
} else {
    $smarty->display("view-error.tpl");
}

?>