<?php
header("Content-Type: text/javascript; charset=utf-8");
	class AssortedFunctions	
	{
		/*
			Formats the result from the query
			for ready input in the HTML
		*/
		public function classAdder($resMe,$resOther,$param=0)	//0-for Private Single Chat msgs
		{	
			$sendme="";
			for($i=0, $j=0; $i<$resMe->num_rows || $j<$resOther->num_rows;)
			{
				//echo "in";
				$r1 = $resMe->fetch_assoc();
				$r2 = $resOther->fetch_assoc();
				if($param!=0)
				{
					//Print the messages chronologically
					if($r2['time']<$r1['time'] && $j<$resOther->num_rows)
					{
						$sendme= $sendme. '<div class=\"nmae\">'.$r2['sender']."</div>";
						$sendme= $sendme. '<div class=\"him\">'.$r2['msg']."</div>";
						$j++;
					}
					else if($i<$resMe->num_rows)
					{
						$sendme= $sendme."<div class=\"me\">".$r1['msg']."</div>";
						$i++;
					}
				}
				else
				{
					if($r2['time']<$r1['time'] && $j<$resOther->num_rows)
					{
						$sendme= $sendme. '<div class="him">'.$r2['msg']."</div>";
						$j++;
					}
					else if($i<$resMe->num_rows)
					{
						$sendme= $sendme.'<div class="me">'.$r1['msg']."</div>";
						$i++;
					}
				}
			}
			return $sendme;
		}
	}