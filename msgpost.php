<?php // urlpost.php
//message segragation into sender receiver sides left
require_once 'login.php';
$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error) 
echo "connect_error:".$db_database.'<br>';
$me=$_COOKIE['credentials'];
	//echo "inme";
if(isset($_POST['roll']))
{
	echo "in";
	$roll=$_POST['roll'];
	echo "<br>"."<br>"."<br>"."<br>".$roll."<br>".$me."<br>";
	$sql="select `message`,`time` from `chat` where (`receiver` like '$roll' AND `sender` like '$me')";
	$result1=$connection->query($sql);
	$sql="select `message`,`time` from `chat` where (`sender` like '$roll' AND `receiver` like '$me')";
	$result2=$connection->query($sql);
	if(!$result1 || !$result2) echo "Query Error!!";
	//$rows=(($result1->num_rows)<($result2->num_rows))?$result1->num_rows:$result2->num_rows;
	echo "YOU          ".$roll."<br>";
	$r2=$result2->fetch_row();
	$r1=$result1->fetch_row();
	for($i=0,$j=0;$i<$result1->num_rows || $j<$result2->num_rows;)
	{
		echo "in";
		if($r1[1]<$r2[1] && $i<$result1->num_rows)
		{
			echo "=".$r1[0]."<br>";
			$r1=$result1->fetch_row();
			$i++;
		}
		else if($j<$result2->num_rows)
		{
			echo ">".$r2[0]."<br>";
			$r2=$result2->fetch_row();
			$j++;
		}
	}	
}
else if(isset($_POST['msg']))
{
	$msg=$_POST['msg'];
	$roll=$_POST['me'];
	$sql = "INSERT INTO `chat` (`receiver`, `sender`, `message`, `time`) VALUES ('$roll', '$me', '$msg', sysdate(3));";
	$result=$connection->query($sql);
	if(!$result) die("Query Error");
	else echo "<br>".$msg;
}
else if(isset($_POST['check']))
{
	$roll=$_POST['check'];
	$sql="select message,count(*) from `chat` where (`sender` like '$roll' AND `receiver` like '$me' AND `status`=0) order by time asc";
	$result=$connection->query($sql);
	if(!$result) echo "Query Error!!";
	else
	{
		$r=$result->fetch_row();
		if($r[1]==0)
			exit();
		for($i=0;$i<$result->num_rows;$i++)
		{
			
			if($r[0]=='')
				continue;
			echo ">".$r[0];
		
		}
		//echo "out";
		$sql="UPDATE `chat` SET `status` = 1 WHERE`sender` = '$roll' AND `receiver`='$me' AND `status`=0";
		$result=$connection->query($sql);
		if(!$result) echo "pozer";
	}
}

else "YO";
	
?>