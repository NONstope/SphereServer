<?php

$dbhost = "localhost";
$dbname = "sphere";
$dbuser = "root";

$conn = mysqli_connect($dbhost, $dbuser, "", $dbname)
    or die("Error while connectiong");
mysqli_query($conn, "SET character_set_results = 'utf8'");

?>