<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$product_id = $_POST["product_id"];
	$due = $_POST["due"];

	if($due > 0){
		$status = "partial";
	} else{
		$status = "completed";
		$due = 0;
	}

	$sql = "UPDATE orders SET due = '$due', payment_status = '$status' WHERE product_id = '$product_id'";
	$connect->query($sql);
    
    $location = 'http://localhost/inventry/manageOrders.php';

	if($connect->query($sql) === TRUE) {

	header('Location: '. $location);	

	} else {
	 	echo "Failed!";
	}
	  
}