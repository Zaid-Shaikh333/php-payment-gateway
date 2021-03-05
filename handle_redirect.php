<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
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

	include "instamojo/Instamojo.php";
	$api = new Instamojo\Instamojo("test_282f1a0318bab2552e24189c882","test_809b0a82f0e98e7c05aa3417f03",'https://test.instamojo.com/api/1.1/');
	$pay_id = $_GET['payment_request_id'];
	try{
		$response = $api->paymentRequestStatus($pay_id);
		?>

		<div class="order-table">
			<h1>Thanks for Purchasing</h1>
			<table>
				<tr>
					<th>Payment ID</th>
					<td><?php echo $response['payments'][0]['payment_id']; ?></td>
				</tr>
				<tr>
					<th>Customer Name</th>
					<td><?php echo $response['payments'][0]['buyer_name']; ?></td>
				</tr>
				<tr>
					<th>Order</th>
					<td><?php echo $response['purpose']; ?></td>
				</tr>
				<tr>
					<th>Amount Paid</th>
					<td><?php echo $response['payments'][0]['amount']; ?></td>
				</tr>
			</table>
		</div>

		<?php
			}
		catch(Exception $e){
			print("Error: ".$e->getMessage());
		}

	?>
</body>
</html>