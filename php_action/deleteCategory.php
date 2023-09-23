<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$category_id = $_POST["category_id"];

	$sql2 = "DELETE from category where category_id = '$category_id'";


	if($connect->query($sql2) === TRUE) {

	$location = 'http://localhost/inventry/category.php';
					header('Location: ' . $location);	

	} else {
	 	echo "Failed!";
	}
	  
}