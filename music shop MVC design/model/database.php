<?php
	//PDO object
	$dsn = 'mysql:host=localhost; dbname=classicmodels';
	$username = 'mgs_user';
	$password = 'pa55word';

	//pdo with error handeling
	try{
		$db = new PDO ($dsn, $username, $password);
	}catch (PDOException $e) {
		$error_message = $e->getMessage();
		include ('database_error.php');
		exit();
	}
	
	
?>