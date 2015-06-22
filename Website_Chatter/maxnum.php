<?php
	include_once './redirect.php';
	$db = new Redirect();
	$db->getconnect();
	
	
	$sql="select max(`num`) from `web_chat`";
	$result=$db->query($sql);
	if($db->error)
		die("KILL-".$db->error);
	$r1=$result->fetch_assoc();
	
	echo $r1[max('num')];
?>