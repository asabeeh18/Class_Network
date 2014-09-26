<?php
	$roll=$_COOKIE['username'];
	$sql="UPDATE `user` SET name=$name,detail=$detail,dob=$dob,email=$email  WHERE `sender` = '$roll' AND `receiver`='$me' AND `status`=0";
	update where `rollno` like $roll