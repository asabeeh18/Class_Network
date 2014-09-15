<?php // testfile.php
$name=$_FILES['img']['tmp_name'];
echo $name;
if(move_uploaded_file($name,"F:\PROgrammin\wamp\images\me.jpg"))
echo "File 'testfile.txt' written successfully";
?>