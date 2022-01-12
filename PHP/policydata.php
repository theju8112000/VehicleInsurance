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
	$pid = $_POST['Person_ID'];
	$pname= $_POST['Selectone'];
	$psd = $_POST['formate'];
	$ped = $_POST['formate'];
	$pc = $_POST['Policy_Cost'];
	$pd = $_POST['Policy_Duration'];

		$sqlstmt ="INSERT INTO `policy`(`PolicyNumber`, `Amount`, `personId`, `duration`, `policysdate`, `policyedate`, `policyName`) VALUES (null,$pc,$pid,$pd,DATE'$psd',DATE'$ped','$pname')";
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
		