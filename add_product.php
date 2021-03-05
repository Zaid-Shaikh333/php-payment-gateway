<?php
	if(isset($_POST['add_product'])) {
		$name = $_POST['product_name'];
		$price = $_POST['product_price'];
		$description = $_POST['product_desc'];
		$image_dir = "image/";   // set image directory
		$target_image = $image_dir.basename($_FILES['product_image']["name"]);  // set image attributes 
		move_uploaded_file($_FILES['product_image']['tmp_name'],$target_image); // upload image to local file storage 

		include 'db_connect.php';

		$query = "INSERT INTO product_info(product_name,product_price,product_image,product_desc) 
		VALUES('$name','$price','$target_image','$description')";
		$exe = mysqli_query($conn,$query);

		if(isset($exe))
		{
			echo "<script>alert('Product Added Successfully.')</script>";
			echo "<script>window.open('products.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('Failed to Upload Data.')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
?>