<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cms";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$conn){
    die("Something went wrong.Database is not connected;");
}


?>