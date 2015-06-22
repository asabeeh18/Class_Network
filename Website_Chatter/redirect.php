<?php
	class Redirect
	{
	
		function getConnect()
		{
			if(!isset($_COOKIE['username']))
			{
				echo "HAGA NA!";
				header('Location: /namegen.html');
			}

			require_once 'login_creds.php';
			$db=new mysqli($db_hostname,$db_username,$db_password,$db_database);
			
			if($db->connect_error) 
				echo "connect_error:".$db_database.'<br>';		
			return $db;
		}
	}
?>