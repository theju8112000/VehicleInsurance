<html>
<head>
<title>add policy</title>
</head>
<style>
table
{
color: white;
background: none;
background-position: center;
border-radius: 30px;
position: center;
transparent: transparent;
}

#btn
{
background-color:#ffcc66;
color:white;
height:35px;
width:100px;
border-radius:25px
}
body
{ 
background-color: #a3c2c2;
background-position: center;
background-size: cover;
box-sizing: border-box;
}
.policy
{
  font-size: 18px;
  color: white;
  margin-top: 50px;
}
</style>

<body>
<FORM method="POST" ACTION="paymenttable.php">

	<div align="center" class="policy"><h2><b><u>ADD DETAILS</u><b></h2></div>
<br>
<br>

<table align="center" cellspacing="20">
<tr>
<td>Person ID</td><td><input type="text" name="pid" value=<?php echo $_POST['pid'];?> readonly></input></td>
<tr>
<td>Policy Number</td><td><input type="text" name="pno" value=<?php echo $_POST['PolicyNumber'];?> readonly></input></td>

<tr><td>Payment Date</td><td><input type="date" name="formate" ></input></td>
<tr><td>
Transection ID</td><td><input type="text" name="tid" ></input></td>
<tr><td>Amount</td><td><input type="text" name="amt"></input></td>
<tr><td>Payment MOD</td><td><input type=radio name="operation" value=online>ONLINE</input><input type=radio name="operation" value=neft>NEFT</input></td></tr>

<tr><td><div class="s"><input type="submit" value="PAY" id="btn"></input></div></td>

</table>
</body>
</html>
