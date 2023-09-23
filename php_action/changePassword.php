<?php 

require_once 'core.php';

if($_POST) {


	$valid['success'] = array('success' => false, 'messages' => array());

	$currentPassword = ($_POST['password']);
	$nPassword = ($_POST['npassword']);
	$cPassword = ($_POST['cpassword']);
	$userId = $_POST['user_id'];

	$sql ="SELECT * FROM users WHERE user_id = {$userId}";
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();

	if($currentPassword == $result['password']) {

		if($nPassword == $cPassword) {

			$updateSql = "UPDATE users SET password = '$nPassword' WHERE user_id = {$userId}";
			if($connect->query($updateSql) === TRUE) {
				
					$location = 'http://localhost/inventry/logout.php';
					header('Location: ' . $location);	

			}
		} 
        else{

					
           echo "<script>alert('conform password error');
  
    </script>";

			}

	}
    else{
              
       echo "<script>alert('current password error');
    
    </script>";
						

			}

	$connect->close();
}
?>