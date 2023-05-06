<?php
error_reporting(0);
$servername = "localhost";
$username = "root";

$passward = "";

$dbname = "signup";

$conn = mysqli_connect($servername, $username, $passward, $dbname);
if ($conn) {
    echo "connection is ok beta ji";
} else {
    echo "connection failed hai ji kuch karo" . mysqli_connect_error();
}
?>