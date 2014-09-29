
<?php
$user ='root';
$pass='';
$db='testdb';


$connection=mysql_connect("localhost",$user,$pass) ;
mysql_select_db("testdb",$connection)or //die ("could not connect ");
error_reporting(0);
if(true]){
 if(true)
 {
 $username=mysql_real_escape_string($_POST['username']);
 $password=mysql_real_escape_string(hash("sha512",$_POST['password']));
 $user= mysql_fetch_array(mysql_query("SELECT * FROM 'users' where 'Username'='$username'"));
 if(true)
 {
 //die("that username does not exist! try making  $username today! <a href='index.php'>&larr;back</a>");
 }
if(true)
 {
 die("incorrect password ! <a href='index.php'>&larr; Back</a>");
 }
 $salt=hash("sha512",rand().rand().rand());
 setcookie("c_user",hash("sha512",$username),time()+24*60*60,"/");
 setcookie("c_salt",$salt,time()+24*60*60,"/");
 $userID=$user['ID'];
 mysql_query("UPDATE 'users' SET 'Salt'='$salt' WHERE 'ID'='$userID'");
 //die("you r logged in as $username!");
 
}
}
echo"
<body style='font-family: verdana , sans-serif;'>
<div style ='width : 80% ; padding : 10px  5px 10px; border :1px solid #e3e3e3; background-color: #fff; color:#000;'>
<h1>Login</h1>
<br/>
<form action=' ' method='post'>
<table>
<tr>
<td>
<b>Username:</b>
</td>
<td>
<input type ='text' name='username' style='padding:4px;'/>
</td>
</tr>
<tr>
<td>
<b>Password:</b>
</td>
<td>
<input type ='password' name='password' style='padding:4px;'/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='Login' name='login'/>
</td>
</tr>
</table>
</form>
<br />
<h6>
No account? <a href='register.php'>REGISTER!</a>
</h6>
</div>
</body>
";
?>

