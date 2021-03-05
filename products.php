<!DOCTYPE html>
<html>
<head>
	<title>Products Page</title>
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
  		<a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
  		<a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  		<a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
	</div>
	<div class="product-card">
		<?php 
			include "db_connect.php";

			$query = "SELECT * FROM product_info"; // Displaying Products from Database.
			$execute = mysqli_query($conn,$query);

			while($row = mysqli_fetch_assoc($execute))
			{
		?>
		<div class="box">
			<h1><?php echo $row['product_name']; ?></h1>
			<img src="<?= $row['product_image'] ?>">
			<h6>Price : <?php echo $row['product_price']; ?></h6>
			<p><?php echo $row['product_desc']; ?></p>
			<button class="btn btn-primary"><a href="orders.php?id=<?=$row['ID'];?>" style = 'text-decoration: none;color: white;'>Buy</a></button>
		</div>
		<?php
		} // End while Loop
	?>
	</div>
</body>
</html>