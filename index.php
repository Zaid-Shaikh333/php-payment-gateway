<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="css/paymentgateway.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f64eb30908.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="product-form">
			<form action="add_product.php" method="post" enctype="multipart/form-data">
 				<h3>Add Products</h3>
 				<div class="form-group">
 					<i class="fas fa-shopping-cart"></i>
 					<input type="text" name="product_name" placeholder="Enter Product Name" required="">
 				</div>
 				<div class="form-group">
 					<i class="fas fa-tags"></i>
 					<input type="text" name="product_price" placeholder="Enter Price" required="">
 				</div>
 				<div class="form-group">
 					<i class="fas fa-info-circle"></i>
 					<textarea name="product_desc" rows="3" cols="36" placeholder="Add Product Description" required=""></textarea>
 				</div>
 				<div class="form-group">
 					<i class="fas fa-file-upload"><input class="image-upload" type="file" name="product_image" required=""></i>
 				</div>
 				<div class="add-button">
 				<button type="submit" name="add_product">Add</button>
 				<a href="products.php">View Products</a>
 				</div>
			</form>
		</div>
	</div>
</body>
</html>