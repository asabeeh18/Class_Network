<?php
	//events
	include 'redirect.php';
	//show the top/side bar 
	$sql="select `name`,`place`,`organiser`,`details`,`date` from `event` order by time desc";
	$result=$connection->query($sql);
	if(!$result) die("Query Error!");
	$r=$result->fetch_row();
	for($i=0;$i<$result->num_rows;$i++)
	{
		echo <<< _GO
		<div id='Name'>$r[0]</div>
		<div id='details'>$r[3]</div>
		<div id='time'>$r[4]</div>
		<div id='place'>$r[1]</div>
		<div id='organiser'>$r[2]</div>
		
_GO;
		$r=$result->fetch_row();
	}
	echo "<div id='create'>OR CREATE EVENT</div>";
	echo <<< _GO
	<form method=POST action="addevent.php">
	Name<input type="text" name="name"><br>
	Place<input type="text" name="place"><br>
	Date<input type="date" name="time"><br>
	Details<input type="text" name="detail"><br>
	<input type="submit">
_GO;
	//footer and shit
?>