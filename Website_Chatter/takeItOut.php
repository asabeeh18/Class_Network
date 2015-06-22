<?php
	include_once './redirect.php';
	$db = new Redirect();
	$db->getconnect();
	
	if(!isset($_COOKIE['username'])
		die("NO COOKIE");
	$me=$_COOKIE['username'];
	$num=$_POST['num'];
	$sql="select `username`,`msg` from `web_chat` where `num`>'$num' order by time asc";
	$result=$db->query($sql);
	if($db->error)
		die("KILL-".$db->error);
	
	while($r1=$result->fetch_assoc())
	{
		if(!strcmp($r1['username'],$me))
		{
			echo '<div class="me">';
		}
		else
			echo '<div class="you">';
		echo $r1['msg'].'</div>';
	}
?>