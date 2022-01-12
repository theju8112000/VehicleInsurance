<?php
$servername='localhost';
$username='root';
$password='';
$dbname='vehicleinsurence';

	$conn=new mysqli($servername,$username,$password,$dbname);
    if(!$conn)
    {
	   echo"failed to connect to mysql :".$mysqli->connect_error;
		exit();
	}
	else
	{
	
	echo "connected to db";
	echo"<br>";
	//die();
	
	
$policyNumber  = $_POST['policyNumber'];
$policyDate= $_POST['policyDate'];
$Amount = $_POST['Amount'];
$personId = $_POST['personId'];
$valididty = $_POST['valididty'];
$mod= $_POST['mod'];

		$sqlstmt ="INSERT INTO `policy`(`Person_Id`, `policynumber`, `policydate`, `amount`, `validity`, `mod`) VALUES (null, '$policyNumber', '$policyDate', '$Amount', '$valididty', $mod,)";
		
		echo $sqlstmt;
		die();
		
		if($conn->query($sqlstmt) === TRUE)
		{
				echo "<script>
				alert('Registered succefully');
				window.location.href='login.html';
				</script>";
		}
			echo "<br>";
				echo "error";
				die();
				echo "<script>
				alert('Sorry Your Registration Fails');
				window.location.href='error.html';
			    	</script>";
		}
?>