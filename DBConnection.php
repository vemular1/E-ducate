<?php
$ip= "localhost";
$uname = "root";
$pass = "";
$db = "study";


$con = new mysqli($ip, $uname, $pass, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>