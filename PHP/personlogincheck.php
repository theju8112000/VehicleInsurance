<?php
$servername='localhost';
$usernmae='root';
$password='';
$dbname='vehicleinsurence';

	$conn=new mysqli($servername,$usernmae,$password,$dbname);
if($conn->connect_errno)
{
	echo "Failed to connect to mysql :".$mysqli->connect_error;
	exit();
}
else
{
	echo "connected to db";
	echo "<br>";
	
	//$_POST['pd']='ashu123';
	
	$sqlstmt = "SELECT * FROM `person` WHERE Password='ashu123'"; 
		
		echo $sqlstmt;
		
	if($conn->query($sqlstmt) === TRUE)
	{
		echo "<script>
		alert('Delete or update succesfully');
		window.location.href='viewpersonlist.php';
		</script>";
	}
	else
	{		
		echo "<br>";
		echo "error";
		die();
		echo "<script>
		alert('Delete or update Unsuccesfully');
		window.location.href='error.html';
		</script>";
	}
		
}
?>
		