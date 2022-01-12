<?php
session_start();
?>
<html>
<head>
<style>

body
{ 
background-color: lightGray;
background-position: center;
background-size: cover;
box-sizing: border-box;
margin-top:90px;
}
.src
{
margin-top=40px;
}
.btn
{
	margin-top:20px;
	margin-left:680px;
}
</style>
</head>
<body>
<form action='policyview1.php' method='POST'>
<div align=center><h2><b><u>PAYMENT DETAILS</u></b></h2></div><br>
<table><tr><td><input class="btn" type=text name='pid' placeholder='Give the Person ID:' required></input></td></tr><tr><td><input class="btn" type=text name='PolicyNumber' placeholder='Give the Policy Number:' required></input></td><td><input type=submit value="PAY"></input></td></tr>
</table>
</form>
</body>
</html>
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
	$sqlstmt="SELECT * FROM `payment` WHERE PersonId=".$_POST['PersonId'];
	
	$result=$conn->query($sqlstmt);

	
	if($result -> num_rows > 0)
	{
		
		echo "<table border=2 align=center>";
		echo "<tr><th>Person Id</th><th>Policy Number</th><th>Policy Amount</th><th>Payment Mod</th><th>Payed date</th><th>Transaction ID</th><th>Status</th>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>";
			echo $row['PersonId'];
			echo "</td><td>";
			echo $row['PolicyNo'];
			echo "</td><td>";
			echo $row['amount'];
			echo "</td><td>";
			echo $row['PaymentMod'];
			echo "</td><td>";
			echo $row['PaymentDate'];
			echo "</td><td>";
			echo $row['TID'];			
			echo "</td><td>";
			echo $row['status'];
			echo "</tr>";

		
		}
		echo "</table>";
	}
	else
	{
		echo "<div align=center>PAYMENT Not DONE</div>";
		
	}
	
}
?>




