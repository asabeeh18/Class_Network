<html>
	<head><title id="tab">Single Chats</title>
		<link rel="stylesheet" type="text/css" href="chat.css"/>
	</head>	
	<body>
	<?php
		//improve indentation of js URGENT!!!!!
		require_once 'login.php';
		$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
		if($connection->connect_error) 
		echo "connect_error:".$db_database.'<br>';
		if(!isset($_COOKIE['username']))
		{
			echo "HAGA NA!";
			header('Location: /index.php');
		}	
		$me= $_COOKIE['username'];
		$result=$connection->query("select `name`,`roll_no` from `user` where `roll_no` not like '$me'");
		if(!$result) echo "Query Error!!";
		echo "<div id=\"list\">";
		for($i=0;$i<$result->num_rows;$i++)
		{
			$nmae=$result->fetch_row();
			$nm=$nmae[0];
			echo "<div class=\"listEle\" onclick=\"selector('$nmae[1]','$nm')\">$nmae[0]</div>";
		}
		echo "</div>";
	?>
	<div id="msgSpan">RepLaCE</div>
	
	<form onsubmit="return false" id="box">
                <input type=text id="message_input">
                <input onclick="fire()" type="submit" id="send_button">
	</form>
	<script>
		var me=0;
		//this function loads only when the partner is selected
		
		function selector(roll_no,name)
		{
			document.getElementById('tab').innerHTML=name
//			alert("alive"+me);
			me=roll_no;
			
	//		alert("alive"+me);
			request = new ajaxRequest()
			request.open("POST", "msgpost.php",true)
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
			
			//alert("alive0"+me);
			request.onreadystatechange = function()
			{
				//alert("alive1"+this.readystate);
				if (this.readyState == 4)
				{
					//alert("alive2"+me);
					if (this.status == 200)
					{
						//alert("alive3"+me);
						if (this.responseText != null)
						{
							document.getElementById('msgSpan').innerHTML =this.responseText
							setInterval(function(){freeze(me)},1000);
						}
						else alert("Ajax error: No data received")
					}
					else alert( "Ajax error: " + this.statusText)
				}
			}
			request.send("roll="+me)	
		}
		var params;
		var request;
		function fire()
		{
		x=document.getElementById("message_input");
		params="msg="+x.value;
		request = new ajaxRequest()
		request.open("POST", "msgpost.php",true)
		request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
		//alert(params);
		
		request.onreadystatechange = function()
		{
			if (this.readyState == 4)
			{
				if (this.status == 200)
				{
					if (this.responseText != null)
					{
						document.getElementById('msgSpan').innerHTML =document.getElementById('msgSpan').innerHTML+"<br>"+this.responseText
					}
					else alert("Ajax error: No data received")
				}
				else alert( "Ajax error: " + this.statusText)
			}
		}
			request.send(params+"&me="+me)
		}
		function freeze(isThere)
		{
			//x=document.getElementById("message_input");
			params="check="+isThere;
			request = new ajaxRequest()
			request.open("POST", "msgpost.php",true)
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
			//alert(params);
			
			request.onreadystatechange = function()
			{
				if (this.readyState == 4)
				{
					if (this.status == 200)
					{
						if (this.responseText != null)
						{
							document.getElementById('msgSpan').innerHTML =document.getElementById('msgSpan').innerHTML+this.responseText
						}
						else alert("Ajax error: No data received")
					}
					else alert( "Ajax error: " + this.statusText)
				}
			}
				request.send(params)
		}	
		//document.getElementById("here").innerHTML=x;
		//alert(x);
		//params = "url=localhost/aja.html"
		function ajaxRequest()
		{
			try
			{
				var request = new XMLHttpRequest()
			}
			catch(e1)
			{
				try
				{
					request = new ActiveXObject("Msxml2.XMLHTTP")
				}
				catch(e2)
				{
					try
					{		
						request = new ActiveXObject("Microsoft.XMLHTTP")
					}
					catch(e3)
					{	
						request = false
					}
				}
			}
			return request
		}
	</script>
</body>
</html>