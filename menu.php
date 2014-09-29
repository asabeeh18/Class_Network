<?php 
include 'redirect.php';
?>
<html>
	<head><title>HOME</title></head>
	<body>
	<ul>
		<li><h1><?php 
		$roll=$_COOKIE['username']; 
		echo "<a href=profile.php>$roll</a>"; ?></h1>
		<?php
		$str="select `dp` from `user` where '$roll'=`roll_no`";
		$result=$connection->query($str);
		if($result)
		{
			$pic=$result->fetch_row();
			//echo $pic[0];
			echo "<img src=$pic[0]>"."<br>";
		}
		else echo "hAGA NA!";
		?>
		<li><a href="Profile.php">My Profile</a></li>
		<li><a href="ref.html">References</a></li>
		<li><a href="events.html">Events</a></li>
		<li><a href="discl.html">Discussions</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</body>
</html>