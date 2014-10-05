<html>
	<head><title>Reference Books</title>
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
	//references
	include 'redirect.php';
	$auth="%";
	$subj="%";
	if(isset($_POST['auth']))
	if($_POST['auth']!="")
		$auth=$_POST['auth'];
	if(isset($_POST['subj']))
	if($_POST['subj']!="")
		$subj=$_POST['subj'];
	//show the top/side bar 
	echo <<< _GO
	<!--Style the text and colors of this page inline is preferred-->
	<H1>Reference Books</H1>
	<form method=POST action=ref.php class="container">
		Author<input type="text" name="auth"><br>
		Subject<input type="text" name="subj"><br>
		<input type="submit" value=Search>
	</form>
_GO;
	$sql="select * from `reference` where `author` like '$auth' AND `subject` like '$subj'";
	$result=$connection->query($sql);
	if(!$result) die("Query Error!");
	if($result->num_rows==0)
		echo "<div id='error'>NO RESULT MATCH</div>";
	echo <<< _GO
			<div class="auth_table">
			<table border="1" class="container">
			<tr>
					<th>Author</th>
					<th>Name</th>
					<th>Subject</th>
					<th>Link</th>
			</tr>
_GO;
	$r=$result->fetch_row();
	for($i=0;$i<$result->num_rows;$i++)
	{
		echo <<< _GO
			<tr>
				<td>$r[1]</td>
				<td>$r[0]</td>
				<td>$r[2]</td>
				<td><a href='$r[3]'>Download</a></td>
			</tr>
_GO;
		$r=$result->fetch_row();
	}
	echo "</table></div></body></html>";
	//footer and shit
?>	