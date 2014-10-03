<?php
	//Search for ppl
	include 'redirect.php';
	$roll=$_COOKIE['username'];
	echo <<< _GO
		<form action=searchppl.php?fill=1 method='POST'>
			Name<input name='name' type='text' value=><br>
			Roll No<input name='roll_no' type='text'><br>
			Email Id<input name='email' type='email' ><br>
			Detail<input name='detail' type='text'><br>
			Mobile Number<input name='phno' type='number'><br>
			Gender
			<input type='radio' name='gender' value=Male>Male   
			<input type='radio' name='gender' value=Female>Female
			<input type='radio' name='gender' value=Any>Any<br>
			Status<input name='status' type='text'><br>
			Date OF Birth<input name='dob' type='date'><br>
			<input type='submit'><br>
		</form>
_GO;
	if(isset($_GET['fill']))
	{
		//init
		$n="%";
		$d="%";
		$do="%";
		$e="%";
		$p="%";
		$g="%";
		$s="%";

		if(isset($_POST['name']))
			if($_POST['name']!="")
				$n=$_POST['name'];
		if(isset($_POST['detail']))
			if($_POST['detail']!="")
				$d=$_POST['detail'];
		if(isset($_POST['dob']))
			if($_POST['dob']!="")
				$do=$_POST['dob'];
		if(isset($_POST['email']))
			if($_POST['email']!="")
				$e=$_POST['email'];
		if(isset($_POST['phno']))
			if($_POST['phno']!="")
				$p=$_POST['phno'];
		if(isset($_POST['gender']))
			if($_POST['gender']!="")
				$g=$_POST['gender'];
		if(isset($_POST['status']))
			if($_POST['status']!="")
				$s=$_POST['status'];
		
		//filters list
		//echo $path." ";
		echo "===".$p;
		$sql="SELECT name,dp,gender from `user` where `name` like '$n' && `about` like '$d' && `bday` like '$do' && `email_id` like '$e' && `phno` like '$p' && `gender` like '$g' && `status` like '$s'";
		//echo "<Sbr>".$sql."<br>";
		$result=$connection->query($sql);
		if(!$result) echo "shit:".$connection->error."<br>";
		else
		{
			echo $sql;
			$r=$result->fetch_row();
			echo "SUCCESS $r[0] $result->num_rows";
			for($i=0;$i<$result->num_rows;$i++)
			{
				echo "<br><br>$r[0]<br>$r[1]$r[2]<br><br>";
				$r=$result->fetch_row();
			}
		}
	}
	