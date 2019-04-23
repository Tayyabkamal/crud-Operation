<?php
require ("../Form(uol)/connection.php");

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$product_name = $_POST['ProductName'];
$product_size = $_POST['ProductSize'];
$product_color = $_POST['ProductColor'];
$product_price = $_POST['ProductPrice'];
$product_quantity = $_POST['ProductQuantity'];


$query = "UPDATE record
SET username= '$username', email='$email' , address='$address' , contact='$contact' , product_name='$product_name' , product_color='$product_color' , product_price='$product_price' , product_quantity='$product_quantity'
WHERE id=$id ";

$run = mysqli_query($conn,$query);
if (!$run){
    echo "Oops !! ERROR";
}else{
    header('location:view.php');
}

?>