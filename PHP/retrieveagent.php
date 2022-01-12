<?php
$servername='localhost';
$usernmae='root';
$password='';
$dbname='vehicleinsurence';

$conn=new mysqli($servername,$usernmae,$password,$dbname);
	if(!$conn)
	{
		echo "Failed to connect to mysql :".$mysqli->connect_error;
		exit();
	}
	else
	{
		echo "connected to db";
		echo "<br>";

		$sqlstmt="SELECT * FROM `agent` WHERE Password='".$_POST['pd']."'";
		$rsl=$conn->query($sqlstmt);
		//echo $sqlstmt;
		//die();
		
		if(strcmp($rsl,$_POST['Password'])==0)
		{
				echo "<script>
				alert('Login succefully');
				window.location.href='retrievedetails.php';
				</script>";
		}
		else
		{		
				echo "<br>";
				echo "error";
				die();
				echo "<script>
				alert('incorrect password');
				window.location.href='error.html';
				</script>";
		}
		
	}
$conn->close();
?>
		