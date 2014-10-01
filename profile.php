<html>
	<head><title>User Profile</title></head>
	<body>
<?php
	include 'redirect.php';
		$name="YO";	
	$me=$_COOKIE['username'];
	$sql="select `dp`,`roll_no`,`email_id`,`name`,`phno`,`gender`,`bday`,`status`,`about` from `user` where `roll_no` like '$me'";
	$result=$connection->query($sql);
	$r=$result->fetch_row();
	$pic=$r[0];
	$name=$r[3];
	$roll=$r[1];
	$detail=$r[8];
	$email=$r[2];
	$dob=$r[6];
	$mob=$r[4];
	$status=$r[7];
	$gender=$r[5];
	echo "<a href=editprofile.php>Edit Profile</a>";
//	echo $pic;
	echo <<< _GO
	<div id="pic"><img src=$pic alt='some_text'>
	<div id="name">$name</div>
	<div id="roll">$roll</div>
	<div id="detail">$detail</div>
	<div id="email">$email</div>
	<div id="gender">$gender</div>
	<div id="dob">$dob</div>
	<div id="mob">$mob</div>
	<div id="status">$status</div>
_GO;
?>

	</body>
</html>