<?php
	require ("../Form(uol)/connection.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-color:gray">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                
            	<a href="view.php" class="btn btn-success" >View The Page</a>
            </li>
    </div>
</nav>


	<div class="container"></div><img src='wall.jpg' /><div class="container">
	<div class="col-lg-6 m-auto">
		<form method="post" action="insert_process.php" >
		
			<br><br><div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white">Form</h1>
				</div>
				<br>
				<label>Username</label>
					<input type="text"name="username"class="form-control"><br>
					<label>Email</label>
					<input type="email"name="email"class="form-control"><br>
					<label>Address</label>
					<input type="text"name="address"class="form-control"><br>
					<label>Contact</label>
					<input type="tel"name="contact"class="form-control"><br>
					<label>Product_Name</label>
					<input type="text"name="ProductName"class="form-control"><br>
					<label>Product_Size</label>
					<input type="text"name="ProductSize"class="form-control"><br>
					<label>Product_color</label>
					<input type="text"name="ProductColor"class="form-control"><br>
					<label>Product_price</label>
					<input type="number"name="ProductPrice"class="form-control"><br>
					<label>product_quantity</label>
					<input type="number"name="ProductQuantity"class="form-control"><br>
					<button class="btn btn-success"type="submit"name="done">Submit</button>
			</div>
		</form>
	</div>		
	</div>

</body>
</html>