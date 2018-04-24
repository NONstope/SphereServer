<?php
require_once("configs/config-smarty.php");
require_once("configs/config-db.php");
session_start();

$appid = $_GET['appid'];
$app = mysqli_query($conn, "SELECT * FROM apps WHERE id = '$appid'");
$app = mysqli_fetch_assoc($app);

if (!empty($app)) {
    $mark_avg = mysqli_query($conn, "SELECT AVG(mark) AS mark FROM reviews WHERE app_id = $appid");
    $mark_avg = mysqli_fetch_assoc($mark_avg);
    $bugs_amt = mysqli_query($conn, "SELECT COUNT(*) AS value FROM bugs WHERE app_id = $appid");
    $bugs_amt = mysqli_fetch_assoc($bugs_amt);
    $reviews_l_q = mysqli_query($conn, "SELECT * FROM reviews INNER JOIN users ON user_id = users.id WHERE app_id = $appid");
    while ($row = mysqli_fetch_assoc($reviews_l_q)) {
        $reviews_lst[] = $row;
    }
    $bugs_l_q = mysqli_query($conn, "SELECT * FROM bugs INNER JOIN users ON user_id = users.id WHERE app_id = $appid");
    while ($row = mysqli_fetch_assoc($bugs_l_q)) {
        $bugs_lst[] = $row;
    }
    $smarty->assign("app", $app);
    $smarty->assign("mark_avg", $mark_avg);
    $smarty->assign("bugs_amt", $bugs_amt);
    $smarty->assign("reviews_lst", isset($reviews_lst) ? $reviews_lst : array());
    $smarty->assign("bugs_lst", isset($bugs_lst) ? $bugs_lst : array());
    $smarty->assign("admin", $_SESSION["user_md"] == "admin");
    $smarty->display("view-app.tpl");
} else {
    $smarty->display("view-error.tpl");
}

?>