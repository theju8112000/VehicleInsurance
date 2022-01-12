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
	//die();
	echo $_POST['pid'];
	die();
	echo $_POST['pid'];
	$sql = "SELECT Person_Id,FirstName,LastName,Address,PhoneNo,PolicyNumber,Amount,policysdate,duration,policyedate,policyName FROM `person`,`policy` WHERE person.Person_Id = policy.personId AND person.Person_ID='".$_POST['pid']."'";
	//echo $sql;
	//die();
	$result = $conn->query($sql);
	
	if($result -> num_rows > 0)
	{	
		$row=$result->fetch_assoc();
		
		$Person_Id=$row['Person_Id'];
		$FirstName=$row['FirstName'];
		$LastName=$row['LastName'];
		$Address=$row['Address'];
		$PhoneNO=$row['PhoneNo'];
		$pname= $row['policyName'];
		$psd = $row['policysdate'];
		$ped = $row['policyedate'];
		$pc = $row['Amount'];
		$pd = $row['duration'];
		//die();
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
<title>Details</title>
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
background-color: LightGray;
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
<FORM method="POST" ACTION="payment.html">
	<div class="regform"><h1><b><u>Details</u></b></h1></div>
<br>
<table align="center" cellspacing="20">
<tr>
<td>Person_ID</td><td><input type="text" name="Person_Id" value=<?php echo $Person_Id;?>></input></td>
<tr>
<td>first_name</td><td><input type="text" name="FirstName" value=<?php echo $FirstName;?>></input></td>

<tr><td>last_Name</td><td><input type="text" name="LastName" value=<?php echo $LastName;?>></input></td>
<tr><td>
Address</td><td><input type="text" name="Address" value=<?php echo $Address;?>></input></td>
<tr><td>
Phone_Number</td><td><input type="text" name="PhoneNo" value=<?php echo $PhoneNO;?>></input></td></tr>
<td>Policy_Name</td><td><input type="text" name="pname" value=<?php echo $pname;?>></input></td>
<tr>
<td>policy_Start_Date</td><td><input type="text" name="policy_Start_Date" value=<?php echo $psd;?>></input></td>

<tr><td>policy_End_Date</td><td><input type="text" name="policy_End_Date" value=<?php echo $ped;?>></input></td>
<tr><td>
policy_Cost</td><td><input type="text" name="policy_Cost" value=<?php echo $pc;?>></input></td>
<tr><td>
Policy_Duration</td><td><input type="text" name="Policy_Duration" value=<?php echo $pd;?>></input></td>
<tr><td><div class="b"><a href='abc1.html'><b>Back<b></a></div></td><td><div class="s"><input type="submit" value="PAY" id="btn"></input></div></td>

</table>
</FORM>
</body>
</html>
<?php
$conn->close();
?>
	
