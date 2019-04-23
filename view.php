<?php
require ("../Form(uol)/connection.php");

$query = "Select * from record";
$run = mysqli_query($conn,$query);
?>


<!doctype html>
<html>
    <head>
        <title>
            View
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Uname</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Contact</th>
            <th scope="col">P_Name</th>
            <th scope="col">P_Size</th>
            <th scope="col">P_Color</th>
            <th scope="col">P_Price</th>
            <th scope="col">P_Quantity</th>
            <th scope="col">Edit &nbsp;&nbsp;&nbsp;&nbsp; Delete</th>
            
        </tr>
        </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($run)) {
            echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['username']."</td>
			<td>".$row['email']."</td>
			<td>".$row['address']."</td>
			<td>".$row['contact']."</td>
			<td>".$row['product_name']."</td>
			<td>".$row['product_size']."</td>
			<td>".$row['product_color']."</td>
			<td>".$row['product_price']."</td>
			<td>".$row['product_quantity']."</td>
			
            <td><a href='edit.php?id=".$row['id']."'class='btn btn-sm btn-primary'>Edit</a> | <a href='delete.php?id=".$row['id']."'class='btn btn-sm btn-danger'>Delete</a> </td>   
		</tr>";
        }
        ?>

        </tbody>
    </table>
    </body>
</html>