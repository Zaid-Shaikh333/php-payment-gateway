<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f64eb30908.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="product-navbar">
  		<a href="index.php"><i class="fa fa-fw fa-home"></i> Add</a>
  		<a href="products.php"><i class="fa fa-fw fa-search"></i> Products</a>
  		<a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  		<a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
	</div>
	<?php
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			include "db_connect.php";
			$query = "SELECT * FROM product_info WHERE ID = '$id'";
			$execute = mysqli_query($conn,$query);
			$fetch = mysqli_fetch_assoc($execute);
		}
	?>
	<div class="order-table">
		<table>
			<tr>
				<th>Product</th>
				<td><?php echo $fetch['product_name']; ?></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><?php echo $fetch['product_price']; ?></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><?php echo $fetch['product_desc']; ?></td>
			</tr>
		</table>
		<form action="pay.php" method="post">
			<input type="hidden" name="product_name" value="<?= $fetch['product_name']; ?>">
			<input type="hidden" name="product_price" value="<?= $fetch['product_price']; ?>">
  			<div class="form-group">
  			  <label for="exampleInputEmail1">Email Address</label>
  			  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required="This is necessary">
  			</div><br>
  			<div class="form-group">
  			  <label for="exampleInputPassword1">Name</label>
  			  <input type="text" class="form-control" name="payee_name" placeholder="Enter your Name" required="This is necessary">
  			</div><br>
  			<button type="submit" class="btn btn-primary">Pay </button>
		</form>
	</div>
</body>
</html>