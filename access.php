<?php
require_once 'login.php';
$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error) 
	echo "connect_error:".$db_database.'<br>';


$result=$connection->query("SELECT * FROM `student` ");
//echo $result;
if(!$result)
	echo "Query returned FALSE";

$rows =$result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
	/*
	$row = $result->fetch_array(MYSQLI_ASSOC);   gives a full row
	echo 'Author: ' . $row['author'] . '<br>';
	*/
	$result->data_seek($j);
	echo 'Author: ' . $result->fetch_assoc()['name'] . '<br>';
	$result->data_seek($j);
	echo 'Title: ' . $result->fetch_assoc()['roll_no'] . '<br>';
	$result->data_seek($j);
	echo 'Category: ' . $result->fetch_assoc()['password'] . '<br>';
	$result->data_seek($j);
	echo 'Year: ' . $result->fetch_assoc()['pointer'] . '<br>';
}
$result->close();
$connection->close();

?>