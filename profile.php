<html>
	<head><title>User Profile</title>
	<link rel="stylesheet" href="style.css">
	<style>
		table, tr, th, td 
		{
			border: 0;
		}
		
ul#menu {
    padding: 0;
	width:100px;
	position:absolute;
	left:0px;
}

ul#menu li a {
    background-color: black;
    line-height: 300%;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px 5px 5px 5px;
}

ul#menu li a:hover {
    background-color: purple;
}
	</style>
	</head>
	<body>
	<ul id="menu" class="container"> 
	  <li><a href="#nogo">Profile</a></li> 
	  <li><a href="#nogo">Submissions</a></li> 
	  <li><a href="#nogo">Assignment</a></li> 
	  <li><a href="#nogo">Events</a></li> 
	  <li><a href="#nogo">Chats</a></li> 
	  <li><a href="#nogo">Reference</a></li> 
	  <li><a href="#nogo">Log Out</a></li> 
	</ul> 

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
//	echo $pic;

	echo <<< _GO
	<div class="container">
		<div class="profile">
			<table>
				<tr>
					<td>
						<img src=$pic>
					</td>
					<td>
						<h1>$name</h1>
					</td>
				</tr>
			</table>
			<div class="search">
				<a href=searchppl.php><input type="button" value="Search for people"></a>
				<a href=editprofile.php><input type="button" value="Edit my profile"></a>
			</div>
		</div>
		<div class="status">
			<h2>Status: $status</h2>
		</div>
		<div class="info">
			<table>
				<tr>
					<td>
						Date Of Birth:
					</td>
					<td>
						$dob
					</td>
				</tr>
				<tr>
					<td>
						Roll No.:
					</td>
					<td>
						$roll
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						$email
					</td>
				</tr>
				<tr>
					<td>
						Phone No.:
					</td>
					<td>
						$mob
					</td>
				</tr>
				<tr>
					<td>
						Gender:
					</td>
					<td>
						$gender
					</td>
				</tr>
				<tr>
					<td>
						About Me:
					</td>
					<td>
						$detail
					</td>
				</tr>
			</table>
		</div>
	</div>
	
_GO;

?>
</body>
</html>
