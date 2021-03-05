<?php
	$name = $_POST['payee_name'];
	$order = $_POST['product_name'];
	$price = $_POST['product_price'];
	$email = $_POST['email'];

	include "instamojo/Instamojo.php";
	$api = new Instamojo\Instamojo("test_282f1a0318bab2552e24189c882","test_809b0a82f0e98e7c05aa3417f03",'https://test.instamojo.com/api/1.1/');

	try {
    $response = $api->PaymentRequestcreate(array(
        "purpose" => $order,
        "amount" => $price,
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "allow_repeated_payments" => false,
        //"webhook" => 
        "redirect_url" => "http://localhost/payment%20gateway/handle_redirect.php"
        ));
    //print_r($response);
    $pay_url = $response['longurl'];
    header("location:$pay_url");

	}
	catch (Exception $e) {
	    print('Error: ' . $e->getMessage());
	}

?>