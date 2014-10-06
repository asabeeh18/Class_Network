<html>
	<head><title>Search Classmates</title>
	<link rel=stylesheet href=style1.css>
	<style>
		table
		{
			color:#fafbfb;
		}
		body
		{
			background-image: url('img/ref1.jpg');
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
  		}
		.pikachu{

	width:200px;
	height:200px;
	padding:0px;
	margin: 0 auto;
	overflow: hidden;
	position:float;
	}
	.container{
	position:absolute;
	left-margin:300px;
	left:200px;
	top:400px;
	}
	.container{
	height:auto;
	width:auto;
}
table{
	border-collapse:collapse;
	padding:0px;
}
td{
	
	padding:5px;
}
ul#menu {
    padding: 0;
	width:170px;
	position:absolute;
	left:0px;
}

		ul#menu li {
		
		}

		ul#menu li a {
			background-color: orange;
			    line-height: 300%;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
			border-radius: 5px 5px 5px 5px;
		}

		ul#menu li a:hover {
			background-color: #996666;
		}
		ul#chats li
		{
			display: block;
		}
		ul#chats li a
		{
			background-color: #61c3b1;
			color: white;
			padding: 10px 20px;
			text-decoration: none;
			border-radius: 5px 5px 5px 5px;
		}
		ul#chats li a:hover
		{
			background-color: #996666;
		}
		ul{
	margin-top:20px;
	margin-left:20px;
}
		</style>
	</head>
	<body>
		<ul id=menu>
		<li><a href=index.php>Homepage</a></li>
		<li><a href="ref.php">References</a></li>
		<li><a href="event.php">Events</a></li>
		<li><a href="discl.html">Discussions</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
<?php
	//Search for ppl
	include 'redirect.php';
	$roll=$_COOKIE['username'];
	echo <<< _GO
		<form action=searchppl.php?fill=1 method='POST' cellspacing=0 style=margin-left:300px;>
		<table>
			<tr>
			<td>Name</td><td><input name='name' type='text' value=>
			</tr>
			<tr>
			<td>Roll No</td><td><input name='roll_no' type='text'></td>
			</tr>
			<tr>
			<td>Email Id</td><td><input name='email' type='email' ></td>
			</tr>
			<tr>
			<td>Detail</td><td><input name='detail' type='text'></td>
			</tr>
			<tr>
			<td>Mobile Number</td><td><input name='phno' type='number'></td>
			</tr>
			<tr>
			<td>Gender
			</td><td><input type='radio' name='gender' value=Male>Male   
			</td><td><input type='radio' name='gender' value=Female>Female
			</td><td><input type='radio' name='gender' value=Any>Any</td>
			</tr>
			<tr>
			<td>Status</td><td><input name='status' type='text'></td>
			</tr>
			<tr>
			<td>Date OF Birth</td><td><input name='dob' type='date'></td>
			</tr>
			<tr>
			<td><input type='submit'></td>
			</tr>
		</table>
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
		//echo "===".$p;
		$sql="SELECT name,dp,about,roll_no from `user` where `name` like '$n' && `about` like '$d' && `bday` like '$do' && `email_id` like '$e' && `phno` like '$p' && `gender` like '$g' && `status` like '$s'";
		//echo "<Sbr>".$sql."<br>";
		$result=$connection->query($sql);
		if(!$result) echo "shit:".$connection->error."<br>";
		else
		{
			//echo $sql;
			$r=$result->fetch_row();
		//	echo "SUCCESS $r[0] $result->num_rows";
			echo "<table class=container><tbody>";
		for($i=0;$i<$result->num_rows;$i++)
			{
				echo "<tr><td><a href=person.php?roll=$r[3]>$r[0]</a></td><td><a href=person?roll='$r[0]'><img src=$r[1] class=pikachu></a></td><td><a href=person?roll='$r[0]'>$r[2]</a></td></tr>";
				$r=$result->fetch_row();
			}
			echo "</tbody></table>";
		}
	}
?>
</body>
</html>