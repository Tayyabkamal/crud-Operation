<?php
require ("../Form(uol)/connection.php");

$id = $_GET['id'];

$query = "Delete from record WHERE id=$id ";

$run = mysqli_query($conn,$query);
if (!$run){
    echo "Oops !! ERROR";
}else{
    header('location:view.php');
}


?>