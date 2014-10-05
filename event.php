<html>
	<head><title>Events</title>
	<link rel=stylesheet href=style.css>
	<style>
		body
		{
			background-image: url('img/ref1.jpg');
			 -webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
  		}
	</style>	
	</head>
	<body>
<?php
	//events
	include 'redirect.php';
	//show the top/side bar 
	
	$sql="select `name`,`place`,`organiser`,`details`,`date`,`type` from `event` order by time desc";
	$result=$connection->query($sql);
	if(!$result) die("Query Error!");
	echo <<< _GO
			<div class="auth_table">
			<table border="1" class="container">
			<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Place</th>
					<th>Date</th>
					<th>Organiser</th>
					<th>Details</th>
			</tr>
_GO;
	$r=$result->fetch_row();
	for($i=0;$i<$result->num_rows;$i++)
	{
		echo <<< _GO
			<tr>
				<td>$r[0]</td>
				<td>$r[5]</td>
				<td>$r[1]</td>
				<td>$r[4]</td>
				<td>$r[2]</td>
				<td>$r[3]</td>
			</tr>
_GO;
		$r=$result->fetch_row();
	}
	echo "</table><div id='create' class='container' style='margin-top:10px;'>OR CREATE EVENT";
	echo <<< _GO
	<form method=POST action="addevent.php">
	Name<input type="text" name="name"><br>
	Place<input type="text" name="place"><br>
	Date<input type="date" name="time"><br>
	Details<input type="text" name="detail"><br>
	<input type="submit">
	</form>
	</div>
_GO;
	echo "</body></html>";
	//footer and shit
?>