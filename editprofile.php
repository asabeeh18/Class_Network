<?php
	include 'redirect.php';
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
	<form action=add.php method='POST' enctype="multipart/form-data">
			Name<input name='name' type='text' required='required' value=$name><br>
			Roll No<input name='roll_no' type='text' required='required' value=$roll><br>
			Email Id<input name='email' type='email' required='required' value=$email><br>
			Details Id<input name='email' type='email' value=$email><br>
			Mobile Number<input name='email' type='email' value=$email><br>
			Profile Picture<input type='file' name='img' value='$pic'><br>
			Status<input name='status' type='status' value=$status><br>
			Date OF Birth<input name='dob' type='text' value=$dob><br>
			<input type='submit'><br>
		</form>
_GO;
?>