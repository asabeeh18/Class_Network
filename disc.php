<html>
<body>
	<?php
		//improve indentation of js URGENT!!!!!
		require_once 'login.php';
		$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
		if($connection->connect_error) 
		echo "connect_error:".$db_database.'<br>';
		if(!isset($_COOKIE['credentials']))
		{
			echo "HAGA NA!";
			header('Location: /index.php');
		}	
		echo $_COOKIE['credentials'];
		$result=$connection->query("select `name`,`roll_no` from `student`");
		if(!$result) echo "Query Error!!";
		
		for($i=0;$i<$result->num_rows;$i++)
		{
			$nmae=$result->fetch_row();
			echo "<div onclick=selector('$nmae[1]')>$nmae[0]</div>"."<br>";
		}
	?>
	<div id="here">RepLaCE</div>
	
	<form onsubmit="return false">
                <input type=text id="message_input">
                <input onclick="fire()" type="submit" id="send_button">
	</form>
	<script>
		var me=0;
		//this function loads only when the partner is selected
		
		function selector(roll_no)
		{
//			alert("alive"+me);
			me=roll_no;
			setInterval(function(){freeze(me)},1000);
	//		alert("alive"+me);
			request = new ajaxRequest()
			request.open("POST", "msgpost.php",true)
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
			request.send("roll="+me)
			alert("alive0"+me);
			request.onreadystatechange = function()
			{
				//alert("alive1"+me);
				if (this.readyState == 4)
				{
					//alert("alive2"+me);
					if (this.status == 200)
					{
						//alert("alive3"+me);
						if (this.responseText != null)
						{
							
							document.getElementById('here').innerHTML =this.responseText
						}
						else alert("Ajax error: No data received")
					}
					else alert( "Ajax error: " + this.statusText)
				}
			}			
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
						document.getElementById('here').innerHTML =document.getElementById('here').innerHTML+"<br>"+this.responseText
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
							document.getElementById('here').innerHTML =document.getElementById('here').innerHTML+this.responseText
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