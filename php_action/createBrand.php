<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$brandName = $_POST['brandName'];

	$sql = "INSERT INTO brands (brand_name, brand_active, brand_status) VALUES ('$brandName', 1, 1)";

	if($connect->query($sql) === TRUE) {
	 	
 $location = 'http://localhost/inventry/brand.php';
					header('Location: ' . $location);	



	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the brand.";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
}