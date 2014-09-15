<?php
	setcookie('credentials', 'Xeroo', time() - 2592000, '/');
	if(!isset($_COOKIE['credentials'])) echo "Logout Successfull";
?>