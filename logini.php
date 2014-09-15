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
$result=$connection->query("select `pswd` from `user` where `roll_no`='$name'");
if(!$result)
	echo "ERROR";
$result->data_seek(0);
if($result->fetch_assoc()['password']==$password)
{
	setcookie('credentials',$name,time()+60*60*60,'/');
	header('Location: /menu.php');
	exit();
}
else
	echo "YOU FAILED";

$result->close();
$connection->close();
?>