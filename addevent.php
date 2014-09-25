<?php
	include 'redirect.php';
	if(!isset($_POST['place']))
	{
	echo <<< _GO
	<form method=POST action="addevent.php">
	Name<input type="text" name="name"><br>
	Place<input type="text" name="place"><br>
	Time<input type="text" name="time"><br>
	More Details<input type="text" name="detail"><br>
_GO;
	}
	else if(isset($_POST['place']))
	{
		$sql="insert into `event` (`name`,`details`,`timeto`,`place`) Values ('$name','$details','$time','$place')";
		$result=connection->query($sql);
		if(!$result) echo "Query Error!";
	}
?>