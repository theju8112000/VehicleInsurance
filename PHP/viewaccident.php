<html>
<head>
<style>
.table1
{
color: black;
background: none;
background-position: right;
margin-left: 1300px;
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
<a href="abc1.php"><h2><b>BACK</h2></a>
<li><table class="table1" border=1>
<tr><td><a href="accident.html"><input type=submit value='ADD'></input></td></tr></a>
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
	$sqlstmt = "SELECT * FROM `accident` ";
	$result=$conn->query($sqlstmt);

	
	if($result -> num_rows > 0)
	{
		echo "<table border=1 align=center>";
		echo "<tr><th>FileNo</th><th>Vehicle Number</th><th>Accident Date</th><th>Accident Time</th><th>Accident Place</th>";
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>";
			echo $row['FileNo'];
			echo "</td><td>";
			echo $row['VehicleNo'];
			echo "</td><td>";
			echo $row['acc_date'];
			echo "</td><td>";
			echo $row['acc_time'];
			echo "</td><td>";
			echo $row['acc_place'];
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
