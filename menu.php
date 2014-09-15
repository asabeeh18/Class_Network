<?php 
require_once 'login.php';
	$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
	if($connection->connect_error)
		echo "COnnect Error:".$db_database."<br>";
?>
<html>
	<head><title>Profile/Menu</title></head>
	<body>
	<ul>
		<li><h1><?php if(isset($_COOKIE['name'])) $roll=$_COOKIE['name']; 
		if(isset($roll)) echo $roll; else die("HAGA NA!"); ?></h1>
		<?php
		$str="select `imgpath` from `student` where '$roll'=`roll_no`";
		$result=$connection->query($str);
		if($result)
		{
			$pic=$result->fetch_row();
			//echo $pic[0];
			echo "<img src=$pic[0] alt='some_text'>"."<br>";
		}
		else echo "hAGA NA!";
		?>
		<li><a href="disc.html">Discussions</a></li>
		<li><a href="ref.html">References</a></li>
		<li><a href="events.html">Events</a></li>
		<li><a href="disc.php">Discussions</a></li>
		<li><a href="logout.php">Logout</a></li>
	</body>
</html>