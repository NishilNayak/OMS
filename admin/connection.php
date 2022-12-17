<?php
error_reporting(0);
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "oms";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if ($conn) {
    // echo ("Connection done");
    }
    else{
    echo ("not connect").mysqli_connect_error();
}
?>