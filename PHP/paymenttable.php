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
	
	 $PersonId = $_POST['pid'];	 
	 $pno = $_POST['pno'];
	 $pdate = $_POST['formate'];
	 $tid = $_POST['tid'];
	 $amt = $_POST['amt'];
	 $operation = $_POST['operation'];
	
	
	if(strcmp($_POST['operation'],"online")==0)
	{
		
	$sqlstmt="INSERT INTO `payment`(`PersonId`, `PolicyNo`, `PaymentDate`, `PaymentMod`, `TID`,`amount`,`status`) VALUES ($PersonId,$pno,DATE'$pdate','ONLINE',$tid,$amt,'done')";
	
		//echo $sqlstmt;
		//die();
	}
	if(strcmp($_POST['operation'],"neft")==0)
	{
	$sqlstmt="INSERT INTO `payment`(`PersonId`, `PolicyNo`, `PaymentDate`, `PaymentMod`, `TID`,`amount`,`status`) VALUES ($PersonId,$pno,DATE'$pdate','neft',$tid,$amt,'done')";	
	
	echo $sqlstmt;
		
	}
	if($conn->query($sqlstmt) === TRUE)
	{
		echo "<script>
		alert('Payment Done succesfully');
		window.location.href='viewpersonlist.php';
		</script>";
	}
	else
	{	
		echo "error";
		//die();
		echo "<script>
		alert('Sorry!!!!!Fails Try Again');
		window.location.href='viewpayment.php';
		</script>";
	}
		
}
?>
		