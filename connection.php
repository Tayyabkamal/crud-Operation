<?php

$hostname = "localhost";
$username= "root";
$pwd= "";
$db = "clothes";

$conn = mysqli_connect($hostname,$username,$pwd,$db);

if (!$conn){
    echo mysqli_connect_error();
}
?>