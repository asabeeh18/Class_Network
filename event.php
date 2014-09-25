<?php
	//events
	include 'redirect.php';
	//show the top/side bar 
	$sql="select * from `event` order by time desc";
	$result=$connection->query($sql);
	if(!$result) die("Query Error!");
	$r=$result->fetch_row();
	for($i=0;$i<$result->num_rows;$i++)
	{
		echo <<< _GO
		<div id='Name'>'$r[0]'</div>
		<div id='details'>'$r[1]'</div>
		<div id='time'>'$r[2]'</div>
		<div id='place'>'$r[3]'</div>
		
_GO;
		$r=$result->fetch_row();
	}
	echo "<div id='announce'>OR CREATE EVENT</div>";
	echo <<< _GO
	<form method=POST action=event.php>
	Name<input type="text" name="name"><br>
	Place<input type="text" name="place"><br>
	Date<input type="date" name="date"><br>
	Details<input type="text" name="details"><br>
	<input type="submit">
_GO;
	//footer and shit
?>