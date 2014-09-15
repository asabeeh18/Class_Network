<?php
	require_once 'login.php';
	$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
	if($connection->connect_error)
		echo "COnnect Error:".$db_database."<br>";
	
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$roll=$_POST['roll_no'];
	$ptr=$_POST['pointer'];
	$path="\\images\\$roll.jpg";
	//echo $path." ";
	echo move_uploaded_file($_FILES['img']['tmp_name'],"F:\PROgrammin\wamp\www".$path);
	$path=$connection->real_escape_string($path);
	$str = "INSERT INTO `student` (`name`, `roll_no`, `password`, `pointer`,`imgpath`) VALUES ('$name','$roll','$pass','$ptr','$path')";
	echo " -".$str;
	$result=$connection->query($str);
	if(!$result)
		echo "FAILED!";
	else
	{
	echo <<<END
			SUCCESSFULLY REGISTERED!!<br>NAME $name<br>Roll No. $roll<br>Pointer $ptr
END;
			setcookie('credentials',$roll,time()+60*60*60,'/');
			header('Location: /menu.php');
			exit();
	}
?>