<?php
	include_once './redirect.php';
	
			require_once 'login_creds.php';
			$db=new mysqli($db_hostname,$db_username,$db_password,$db_database);
			
			if($db->connect_error) 
				echo "connect_error:";		
	
?>