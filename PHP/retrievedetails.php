<html>
<head>
<style>
.table1
{
color: white;
background: none;
background-position: right;
margin-left: 900px;
font-size: 18px;
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
<form action='viewpersonsDetails.php' method='POST'>
<a href="abc1.php"><h2><b>back<b></h2></a>
<table class="table1" border=1>
<tr><td><td><a href="RegistrationForm.html">ADD CUSTOMER</td><td><input type=text name='Person_Id' placeholder='Give the Person ID:' required></input></td>
<td><input type=submit value='Search'></input></td></tr>
</table>
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
	$sqlstmt = "SELECT * FROM `person` ";
	$result=$conn->query($sqlstmt);

	
	if($result -> num_rows > 0)
	{
		echo "<table border=1 align=center>";
		echo "<tr><th>Person Id</th><th>First Name</th><th>Last Name</th><th>Date Of Birth</th><th>Address</th><th>Phone Number</th>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>";
			echo $row['Person_Id'];
			echo "</td><td>";
			echo $row['FirstName'];
			echo "</td><td>";
			echo $row['LastName'];
			echo "</td><td>";
			echo $row['DOB'];
			echo "</td><td>";
			echo $row['Address'];
			echo "</td><td>";
			echo $row['PhoneNo'];
			echo "</td><td>";
			echo "</tr>";
		
		}
		echo "</table>";
	}
	else
	{
		echo "No rows returned";
		
	}
	
}
?>
