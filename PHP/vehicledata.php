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
	
	$pid = $_POST['Person_ID'];
	$now= $_POST['Number_of_wheeles'];
	$vn = $_POST['vehicle_number'];
	$com = $_POST['company'];
	$m = $_POST['Model'];
	$col = $_POST['Color'];

		$sqlstmt ="INSERT INTO `vehicle`(`vehicleNo`, `NumberOfWheeles`, `company`, `Model`, `Color`, `Person_Id`) VALUES ('$vn',$now,'$com','$m','$col',$pid)";
		
		echo $sqlstmt;
		//die();
		
		if($conn->query($sqlstmt) === TRUE)
		{
				echo "<script>
				alert('Policy Added Successfully');
				window.location.href='abc1.php';
				</script>";
		}
		else
		{		
				echo "<br>";
				echo "error";
				die();
				echo "<script>
				alert('Sorry...Fails to Policy Added Successfully');
				window.location.href='error.html';
				</script>";
		}
		
	}
?>
		