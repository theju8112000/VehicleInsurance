<html>
<head>
<style>
.table1
{
color: black;
background: none;
background-position: right;
margin-left: 1000px;
font-size: 15px;
}
body
{ 
background-color: lightGray;
background-position: center;
background-size: cover;
box-sizing: border-box;
}
.src
{
margin-top=40px;
}
</style>
</head>
<body>
<form action='viewpayment.php' method='POST'>
<a href="Vehicleinsurencehomepage.html"><h2><b>BACK</h2></a>
<li><table class="table1" border=1>
<tr>
<td><input type=text name='PersonId' placeholder='Give the Person ID:' required></input></td>
<td><input class="btn" type="submit" name="" value="PAY"></td></tr>
</table>
</li>
<hr size="3", color="orange">
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
	$sqlstmt ="SELECT * FROM `vehicle`,`policy`  WHERE vehicle.Person_Id = policy.personId AND policy.personId=vehicle.Person_Id AND vehicle.Person_Id=".$_POST['PersonId']." AND policy.personId=".$_POST['PersonId']; 
	//echo $sqlstmt;
//die();
		
	$result = $conn-> query($sqlstmt);

	if($result -> num_rows > 0)
	{
		echo "<table border=1 align=center>";
		echo "<tr><th>Person Id</th><th>Policy Number</th><th>Policy Name</th><th>Amount</th><th>Policy start date</th><th>Policy End date</th><th>Duration</th><th>Vehicle Number</th><th>Company</th><th>Number Of Wheeles</th><th>Model</th><th>Color</th>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>";
			echo $row['Person_Id'];
			echo "</td><td>";
			echo $row['PolicyNumber'];
			echo "</td><td>";
			echo $row['policyName'];
			echo "</td><td>";
			echo $row['Amount'];
			echo "</td><td>";
			echo $row['policysdate'];
			echo "</td><td>";
			echo $row['policyedate'];
			echo "</td><td>";
			echo $row['duration'];
			echo "</td><td>";
			echo $row['vehicleNo'];
			echo "</td><td>";
			echo $row['company'];
			echo "</td><td>";
			echo $row['NumberOfWheeles'];
			echo "</td><td>";
			echo $row['Model'];
			echo "</td><td>";
			echo $row['Color'];
			echo "</tr>";
			
		
		}
		echo "</table>";
	}
	else
	{
		echo "<br>";
		echo "error";
		die();
		echo "<script>
		alert('Sorry Your Login Fails');
		window.location.href='newlogin.html';
		</script>";

		
	}
	
}
?>
