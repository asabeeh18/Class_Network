<?php
	require_once 'redirect.php';
	$roll=$_COOKIE['username'];
	echo $roll;
	$n=$_POST['name'];
	$d=$_POST['detail'];
	$do=$_POST['dob'];
	$e=$_POST['email'];
	$p=$_POST['phno'];
	$g=$_POST['gender'];
	//$pi=$_POST['img'];
	$s=$_POST['status'];
	$path="\\images\\$roll.jpg";
	//echo $path." ";
	echo "<br>LO".move_uploaded_file($_FILES['img']['tmp_name'],"F:\PROgrammin\wamp\www".$path);
	$path=$connection->real_escape_string($path);
	$sql="UPDATE `user` SET `name`='$n',`detail`='$d',`dob`='$do',`email_id`='$e',`phno`='$p',`gender`='$g',`dp`='$path' `status`=$s where `roll_no` like $roll";
	$result=$connection->query($sql);
	if(!$result) echo "shit:".$connection->error."<br>";
?>