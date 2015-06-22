<?php // urlpost.php
//message segragation into sender receiver sides left
//i hate my code
//efficient group chat JSON :'(
//implementing prepared statements: http://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php/8255054
header("Content-Type: text/javascript; charset=utf-8");
require_once 'redirect.php';
include_once 'AssortedFunctions.php';

$me=$_COOKIE['username'];
$error_data="";
$sendme=""; //JSON :)
	//echo "inme";
	/*
	 $roll received: First msg
	 Print all the earlier msgs to start the convo
	*/
if(isset($_POST['roll']))
{
	
	$roll=$_POST['roll'];
	$error_data=$error_data."setroll:".$roll;
	$sendme= $sendme. $me;
	//echo "<br>"."<br>"."<br>"."<br>".$roll."<br>".$me."<br>";
	$sql="select `msg`,`time` from `privndisc` where (`dname` like '$roll' AND `sender` not like '$me' )  order by `time` asc";
	$resOther=$connection->query($sql);
	$sql="select `sender`,`msg`,`time` from `privndisc` where (`dname` like '$roll' AND `sender` like '$me' )  order by `time` asc";
	$resMe=$connection->query($sql);
	
	if(!$resMe || !$resOther) echo "Query Error!!@18";
	//$rows=(($result1->num_rows)<($result2->num_rows))?$result1->num_rows:$result2->num_rows;
	//echo "him          ".$roll."<br>";
	$func=new AssortedFunctions();
	$sendme=$func->classAdder($resMe,$resOther,1);
}

 /*Put msg in db*/
else if(isset($_POST['msg']))
{
	//echo "setmsg";
	$msg=$_POST['msg'];
	$roll=$_POST['me'];
	
	//echo $msg." ".$roll." ".$me;
	$sql = "INSERT INTO `privndisc` (`dname`,`sender`, `msg`) VALUES ('$roll','$me','$msg');";
	$result=$connection->query($sql);
	if(!$result) echo "Query Error 55";
	else echo "<div class=\"me\">".$msg."</div>";
}
else if(isset($_POST['check']))
{
	//echo "setcheck";
	$roll=$_POST['check'];
	$sql="select max(`num`) from `privndisc` where (`dname` like '$roll') order by `time` asc";
	$result=$connection->query($sql);
	if($connection->error)
		die("KILL-".$connection->error);
	$r=$result->fetch_row();
	if($r[0]>0)//$_POST['num'])
	{
		$sql="select `msg`,`sender` from `privndisc` where (`dname` like '$roll') order by `time` asc";
		$result=$connection->query($sql);
		if(!$result) echo "error";
		else
		{
			$r=$result->fetch_row();
			for($i=0;$i<$result->num_rows;$i++)
			{
				$sendme= $sendme."<div class=\"nmae\">".$r[1]."</div>";
				$sendme= $sendme."<div class=\"him\">".$r[0]."</div>";		
			}
			//echo "out";
		}
	}
}
else echo "Error big tine hu(Y) ";
$fields = array(
            'message' => $sendme,
            'num' => 0,
			'error'=> $error_data
        );	
//echo $fields;
//echo json_encode($fields);
?>