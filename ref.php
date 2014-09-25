<?php
	//references
	include 'redirect.php';
	$auth="%";
	$subj="%";
	if(isset($_POST['auth']))
		$auth=$_POST['auth'];
	if(isset($_POST['subj']))
		$subj=$_POST['subj'];
	//show the top/side bar 
	echo <<< _GO
	<form method=POST action=ref.php>
		Author<input type="text" name="auth"><br>
		Subject<input type="text" name="subj"><br>
		<input type="submit">
	</form>
_GO;
	$sql="select * from `reference` where `author like '$auth' AND `subject` like '$subj'";
	$result=$connection->query($sql);
	if(!$result) die("Query Error!");
	if($result->num_rows==0)
		echo "<div id='error'>NO RESULT MATCH</div>";
	$r=$result->fetch_row();
	for($i=0;$i<$result->num_rows;$i++)
	{
		echo <<< _GO
		<div id='book'>'$r[0]'</div>
		<div id='auth'>'$r[1]'</div>
		<div id='subj'>'$r[2]'</div>
_GO;
		$r=$result->fetch_row();
	}
	//footer and shit
?>	