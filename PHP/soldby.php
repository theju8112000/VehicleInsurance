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
	$aid = $_POST['Agent_ID'];
	$pid= $_POST['PolicyNo'];

	$sqlstmt="INSERT INTO `soldby`(`Agent_Id`, `policyNo`) VALUES ($aid,$pid)";
	echo $sqlstmt;
		//die();
		
		if($conn->query($sqlstmt) === TRUE)
		{
				echo "<script>
				alert('THANK YOU');
				window.location.href='vehicle.html';
				</script>";
		}
		else
		{		
				echo "<br>";
				echo "error";
				die();
				echo "<script>
				alert('Failed to add policy');
				window.location.href='error.html';
				</script>";
		}
		
	}
?>
		