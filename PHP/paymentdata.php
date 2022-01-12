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
	$pno= $_POST['Policynumber'];
	$payd = $_POST['PaymentDate'];
	$paym = $_POST['PaymentMod'];
	$tid = $_POST['Transection_ID'];

		$sqlstmt ="INSERT INTO `payment`(`PersonId`, `PolicyNo`, `PaymentDate`, `PaymentMod`, `TID`) VALUES ($pid,$pno,DATE'$payd','$paym',$tid)";
		
		echo $sqlstmt;
		//die();
		
		if($conn->query($sqlstmt) === TRUE)
		{
				echo "<script>
				alert('THANK YOU');
				window.location.href='viewpolicy.php';
				</script>";
		}
		else
		{		
				echo "<br>";
				echo "error";
				die();
				echo "<script>
				alert('Sorry Your Registration Fails');
				window.location.href='error.html';
				</script>";
		}
		
	}
?>
		