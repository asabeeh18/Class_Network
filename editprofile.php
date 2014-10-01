<?php
	include 'redirect.php';
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
	echo <<< _GO
		<form action=edit.php method='POST' enctype="multipart/form-data">
			Name<input name='name' type='text' required='required' value=$name><br>
			Roll No<input disabled name='roll_no' type='text' required='required' value=$roll><br>
			Email Id<input name='email' type='email' required='required' value=$email><br>
			Detail<input name='detail' type='text' value=$detail><br>
			Mobile Number<input name='phno' type='number' value=$mob><br>
			Gender
			<input type='radio' name='gender' value='male'>Male   
			<input type='radio' name='gender' value='female'>Female<br>
			Profile Picture<img src=$pic><input type='file' name='img' value=$pic><br>
			Status<input name='status' type='text' value=$status><br>
			Date OF Birth<input name='dob' type='date' value=$dob><br>
			<input type='submit'><br>
		</form>
_GO;
?>