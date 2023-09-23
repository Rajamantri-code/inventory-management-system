<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$brand_id = $_POST["brand_id"];

	$sql2 = "DELETE from brands where brand_id = '$brand_id'";


	if($connect->query($sql2) === TRUE) {

	$location = 'http://localhost/inventry/brand.php';
					header('Location: ' . $location);	

	} else {
	 	echo "Failed!";
	}
	  
}