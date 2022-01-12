<html>
<?php
session_start();
?>
<head>
<style>
.table1
{
color: black;
background: none;
background-position: right;
margin-left: 500px;
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
<?php

if($_SESSION["fn"]) {
?>
<h1><a href="Vehicleinsurencehomepage.html"><h6><b>BACK</h6></a><div align="center" style="color:#ffffff"> Welcome <?php echo $_SESSION["fn"];?> </div><h1>
<?php
}else echo "<h1>Please login first .</h1>";
?>
<form action='policyview.php' method='POST'>
<table class="table1" border=1><tr><td><input type=text name="PersonId" placeholder='Give the Person ID:' required></input></td><td><input class="btn" type="submit" name="" value="View"></input></td></tr>
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
	//echo $_POST['pd'];
	//echo $_POST['fn'];
	//die();
	
	$sqlstmt = "SELECT * FROM `person` WHERE FirstName='".$_SESSION["fn"]."'";
	//echo $sqlstmt;
	//die();
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
