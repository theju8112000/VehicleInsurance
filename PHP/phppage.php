<?php
$servername='localhost';
$username='root';
$password='';
$dbname='vehicleinsurence';

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection 
if($conn -> connect_errno){
	echo"Failed to connect to Mysql:" . $mysqli -> connect_error;
	exit();
}
else
{
	echo "connected to DB";
}

?>
