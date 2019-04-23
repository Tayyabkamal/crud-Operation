<?php
require ("../Form(uol)/connection.php");


$id = $_GET['id'];
$query = "Select * from record where id='$id'";
$run = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($run))
{
			$username=$row['username'];
			$email=$row['email'];
			$address=$row['address'];
			$contact=$row['contact'];
			$pname=$row['product_name'];
			$psize=$row['product_size'];
			$pcolor=$row['product_color'];
			$pprice=$row['product_price'];
			$pquantity=$row['product_quantity'];
}
?>

<!doctype html>
<html>
<head>
    <title>
        Edit
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
<body>    
	<div class="col-lg-6 m-auto">
		<form method="post" action="update.php">
        <input type="hidden" name="id" value="<?=$id?>">
			<br><br><div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white">Form</h1>
				</div>
				<br>
				<label>Username</label>
					<input type="text"name="username" value="<?=$username?>" class="form-control"><br>
					<label>Email</label>
					<input type="email"name="email" value="<?=$email?>" class="form-control"><br>
					<label>Address</label>
					<input type="text"name="address" value="<?=$address?>" class="form-control"><br>
					<label>Contact</label>
					<input type="tel"name="contact" value="<?=$contact?>" class="form-control"><br>
					<label>Product_Name</label>
					<input type="text"name="ProductName" value="<?=$pname?>" class="form-control"><br>
					<label>Product_Size</label>
					<input type="text"name="ProductSize" value="<?=$psize?>" class="form-control"><br>
					<label>Product_color</label>
					<input type="text"name="ProductColor" value="<?=$pcolor?>" class="form-control"><br>
					<label>Product_price</label>
					<input type="number"name="ProductPrice" value="<?=$pprice?>" class="form-control"><br>
					<label>product_quantity</label>
					<input type="number"name="ProductQuantity" value="<?=$pquantity?>" class="form-control"><br>
					<button class="btn btn-success"type="submit"name="done">Submit</button>
			</div>
		</form>
	</div>		

</body>
</html>