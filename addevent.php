<?php
	include 'redirect.php';
	
	$name=$_POST['name'];
	$details=$_POST['detail'];
	$time=$_POST['time'];
	$place=$_POST['place'];
	$org=$_COOKIE['username'];
		$sql="insert into `event` (`name`,`details`,`date`,`place`,`organiser`) Values ('$name','$details','$time','$place','$org')";
		$result=$connection->query($sql);
		if(!$result) echo "Query Error!";
		else 
		{
			echo "ALL OK";
		}
?>