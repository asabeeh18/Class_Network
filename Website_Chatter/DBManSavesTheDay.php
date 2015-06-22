<?php
	
	class DBManSavesTheDay
	{
		private $db
		function __construct() 
		{
			include_once './redirect.php';
			// connecting to database
			$this->db = new Redirect();
			$this->db->getconnect();
		}

		// destructor
		function __destruct() {

		}
		
		function maxNum(var num)
		{
			select max(num) from web_chat;
			$sql="select max(`num`) from `web_chat`";
			$result=$db->query($sql);
			if($db->error)
				die("KILL-".$db->error);
			$r1=$result->fetch_assoc();
			if($r1[max('num')]>num)
				return 1;
			else return 0;
		}
	}
?>