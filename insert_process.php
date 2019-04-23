<?php
require ("../Form(uol)/connection.php");

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$product_name = $_POST['ProductName'];
$product_size = $_POST['ProductSize'];
$product_color = $_POST['ProductColor'];
$product_price = $_POST['ProductPrice'];
$product_quantity = $_POST['ProductQuantity'];

$query = "INSERT into record (username,email,address,contact,product_name,product_size,product_color,product_price,product_quantity)
		VALUES ('$username','$email','$address','$contact','$product_name','$product_size','$product_color','$product_price','$product_quantity')";

$run = mysqli_query($conn,$query);
if (!$run){
    echo "Oops !! ERROR";
}else{
	
    header("location:form.php");
}

?>