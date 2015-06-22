<?php
		
		if(!isset($_COOKIE['username']))
		{
			echo "HAGA NA!";
			header('Location: /enter.php');
		}

		require_once 'login.php';
		$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
		
		if($connection->connect_error) 
			echo "connect_error:".$db_database.'<br>';		
?>