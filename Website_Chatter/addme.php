<?php
	require_once 'redirect.php';
	$name=$_POST['username'];
	echo $name;
	setcookie('username',$name,time()+300*60*60,'/');
	echo "RIGHT!";
	header('Location: /herewearestandinginthewateraboveourheads.html');
	/*$str = $connection->prepare('INSERT INTO `web_chat` (`username`) VALUES (?)');
	//$stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
	$stmt->bind_param('s', $name);
	$stmt->execute();
	$result = $stmt->get_result();
	if(!result)
		echo "WRONG!";
	else
	{
		setcookie('username',$name,time()+300*60*60,'/');
		echo "RIGHT!";
	}*/
?>