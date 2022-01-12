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
		
	$sql = "SELECT * FROM `agent` WHERE Agent_Id=".$_POST['Agent_Id'];
	$result = $conn->query($sql);
	
	if($result -> num_rows > 0)
	{
		$row=$result->fetch_assoc();
		
		$Agent_Id=$row['Agent_Id'];
		$FirstName=$row['FirstName'];
		$LastName=$row['LastName'];
		$DOB=$row['DOB'];
		$Address=$row['Address'];
		$PhoneNO=$row['PhoneNo'];
	}
	else
	{
		echo "This ID does not exit";
		die();
	}
	
	}
?>
<html>
<head>
<title>Agent Detail</title>
<style>
table
{
color: white;
background: none;
background-position: center;
border-radius: 30px;
margin-left: 335px;
font-size: 28px;
}

#btn
{
background-color:green;
color:white;
height:35px;
width:100px;
border-radius:25px
}
body
{ 
background-color: green;
background-position: center;
background-size: cover;
box-sizing: border-box;
}
.regform
{
  font-size: 18px;
  margin-left: 335px;
  color: white;
  margin-top: 85px;
 }
 .b
 {
	 margin-left: 70px;
  color: white;
  margin-top: 20px;
  background-position: center;
 }
 .s
 {
	 margin-left: 60px;
  color: black;
  margin-top: 20px;
  background-position: left;
  
 }
	 
</style>
</head>
<body>
<FORM method="POST" ACTION="update_delete_A.php">
	<div class="regform"><h1><b><u>Agent Details</u></b></h1></div>
<br>
<table align="center" cellspacing="20">
<tr>
<td>Agent_Id</td><td><input type=text name=Agent_Id value=<?php echo $Agent_Id;?> readonly></input></td>
<tr>
<td>first_name</td><td><input type=text name=FirstName value=<?php echo $FirstName;?>></input></td>

<tr><td>last_Name</td><td><input type=text name=LastName value=<?php echo $LastName;?>></input></td>
<tr><td>
DOB</td><td><input type=text name=fromdate required value=<?php echo $DOB;?>></input></td>
<tr><td>
Address</td><td><input type=text name=Address value=<?php echo $Address;?>></input></td>
<tr><td>
Phone_Number</td><td><input type=text name=PhoneNo value=<?php echo $PhoneNO;?>></input></td>
<tr><td>Operation</td><td><input type=radio name=operation value=delete>DELETE</input><input type=radio name=operation value=update>UPDATE</input></td></tr>

<tr><td><div class="b"><a href='abc1.php'><b>Back<b></a></div></td><td><div class="s"><input type="submit" id="btn"></input></div></td>

</table>
</FORM>
</body>
</html>
<?php
$conn->close();
?>
	
