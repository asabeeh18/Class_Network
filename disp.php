<html>
	<head>
		<link rel="stylesheet" type="text/css" href="chat.css"/>
		<title>Private Group Chats</title>
	</head>
	<body onload="getMsg()">
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
		$me=$_COOKIE['username'];
		//echo $me;
	?>
	<div id="msgSpan">RepLaCE</div>
	
	<form onsubmit="return false" id="box">
                <input type=text id="message_input">
                <input onclick="fire()" type="submit" id="send_button">
	</form>
	<script>
		function getMsg()
		{
//			alert("alive"+me);
			
	//		alert("alive"+me);
			request = new ajaxRequest()
			request.open("POST", "publicdisc.php",true)
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
			request.send("load=all")
			request.onreadystatechange = function()
			{
				//alert("alive1 :"+this.readyState);
				if (this.readyState == 4)
				{
					//alert("alive2: "+this.status);
					if (this.status == 200)
					{
						//alert("alive3"+me);
						if (this.responseText != null)
						{
							
							document.getElementById('msgSpan').innerHTML =this.responseText
							setInterval(function(){freeze()},1000);			
						}
						else alert("Ajax error: No data received")
					}
					else alert( "Ajax error: " + this.statusText)
				}
			}
			
		}
		var params;
		var request;
		//when  a msg is sent
		function fire()
		{
		x=document.getElementById("message_input");
		
		request = new ajaxRequest()
		request.open("POST", "publicdisc.php",true)
		request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
		//alert("msg="+x.value);
		
			//alert("send");
			request.send("msg="+x.value)
		request.onreadystatechange = function()
		{
		//	alert(this.readyState);
			if (this.readyState == 4)
			{
				if (this.status == 200)
				{
					if (this.responseText != null)
					{
						//alert("fired");
						document.getElementById('msgSpan').innerHTML =document.getElementById('msgSpan').innerHTML+"<br>"+this.responseText
					}
					else alert("Ajax error: No data received")
				}
				else alert( "Ajax error: " + this.statusText)
			}
		}
		}
		//check for new msgs
		function freeze()
		{
			//x=document.getElementById("message_input");
			request = new ajaxRequest()
			request.open("POST", "publicdisc.php",true)
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
			//alert(params);
			request.send("check=now")
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
		}	
		//document.getElementById("msgSpan").innerHTML=x;
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