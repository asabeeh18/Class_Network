		function ajaja(var file,var POST_DATA="")
		{
			request = new ajaxRequest()
			request.open("POST",file,true)
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded")
			alert(POST_DATA);
			
			//alert("send");
			request.send(POST_DATA)
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
							return this.responseText;
						}
						else alert("Ajax error: No data received")
					}
					else alert( "Ajax error: " + this.statusText)
				}
			}
		}
		function keepCallingMeForeveandEverAndEver(var num)
		{
			if(ajaja('maxnum.php')>num)
			{	
				return ajaja("takeItOut.php","num="+num);
			}
		}
		function losersDontText(var msg)
		{
			ajaja('putItIn.php',"msg="+msg);
		}