<html>
	<head><title>User Profile</title></head>
	<body>
<?php
	include 'redirect.php';
		$name="YO";	
	$me=$_COOKIE['username'];
	$sql="select * from `user` where `roll_no` like '$me'";
	$result=$connection->query($sql);
	$r=$result->fetch_row();
	$pic=$r[5];
	$name;
	$roll;
	$detail;
	$email;
	$dob;
	$mob;
	$status;
	echo <<< _GO
	<div id="pic"><img src=$pic[0] alt='some_text'>
	<div id="name">$name</div>
	<div id="roll">$roll</div>
	<div id="detail">$detail</div>
	<div id="email">$email</div>
	<div id="dob">$dob</div>
	<div id="mob">$mob</div>
	<div id="status">$status</div>
_GO;
?>

	</body>
</html>