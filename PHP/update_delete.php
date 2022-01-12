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
	
	echo $_POST['Person_Id'];
	echo $_POST['FirstName'];
	echo $_POST['LastName'];
	echo $_POST['DOB'];
	echo $_POST['Address'];
	echo $_POST['PhoneNo'];
	echo $_POST['operation'];
	
	
	if(strcmp($_POST['operation'],"update")==0)
	{
	$sqlstmt="UPDATE `person` SET `FirstName`='".$_POST['FirstName']."',`LastName`='".$_POST['LastName']."',`DOB`='".$_POST['DOB']."',`Address`='".$_POST['Address']."',`PhoneNo`='".$_POST['PhoneNo']."' WHERE `Person_Id`=".$_POST['Person_Id'];
		echo $sqlstmt;
		//die();
	}
	if(strcmp($_POST['operation'],"delete")==0)
	{
	$sqlstmt="DELETE FROM `person` WHERE `Person_Id`=".$_POST['Person_Id']; 
		echo $sqlstmt;
		
	}
	if($conn->query($sqlstmt) === TRUE)
	{
		echo "<script>
		alert('Delete or update succesfully');
		window.location.href='retrievedetails.php';
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
		