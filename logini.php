<?php
require_once 'login.php';
$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error) 
	echo "connect_error:".$db_database.'<br>';
//echo $_POST['img'];
$name=$_POST['name'];
$password=$_POST['password'];
echo $name;
echo $password;
$result=$connection->query("select `pswd`,`name` from `user` where `roll_no`='$name'");
if(!$result)
	die("ERROR");
$result->data_seek(0);
if($result->fetch_assoc()['password']==$password)
{
	if(isst($_POST['rmmbr']))
	{
		setcookie(fetch_assoc()['name'],$name,time()+100*60*60*60,'/');
		header('Location: /menu.php');
	}
	else
	{
		setcookie(fetch_assoc()['password'],$name,'/');
		header('Location: /menu.php');
	}
}
else
{
	$try=$_POST['try'];
	$try=$try+1;
	if($try==3)
		die("Limit Reached");
	header("Location: /index.php?try=$try");
}

$result->close();
$connection->close();
?>