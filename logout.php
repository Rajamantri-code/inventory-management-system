<?php 

require_once 'php_action/core.php';

session_unset();

session_destroy();


$location = 'http://localhost/inventry/index.php';
					header('Location: ' . $location);
?>