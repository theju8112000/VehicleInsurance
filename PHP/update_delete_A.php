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
	
	echo $_POST['Agent_Id'];
	echo $_POST['FirstName'];
	echo $_POST['LastName'];
	echo $_POST['fromdate'];
	echo $_POST['Address'];
	echo $_POST['PhoneNo'];
	echo $_POST['operation'];
	
	
	if(strcmp($_POST['operation'],"update")==0)
	{
	$sqlstmt="UPDATE `agent` SET `FirstName`='".$_POST['FirstName']."',`LastName`='".$_POST['LastName']."',`Address`='".$_POST['Address']."',`DOB`='".$_POST['fromdate']."',`PhoneNo`='".$_POST['PhoneNo']."' WHERE `Agent_Id`=".$_POST['Agent_Id'];
		//echo $sqlstmt;
		//die();
	}
	if(strcmp($_POST['operation'],"delete")==0)
	{
	$sqlstmt="DELETE FROM `agent` WHERE `Agent_Id`=".$_POST['Agent_Id']; 
		echo $sqlstmt;
		
	}
	if($conn->query($sqlstmt) === TRUE)
	{
		echo "<script>
		alert('Delete or update succesfully');
		window.location.href='abc1.php';
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
		