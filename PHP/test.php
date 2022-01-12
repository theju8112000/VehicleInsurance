<?php

$FirstName = filter_input(INPUT_POST, 'first_name');
$LastName= filter_input(INPUT_POST, 'last_name');
$DOB = filter_input(INPUT_POST, 'Date_Of_Birth');
$Address = filter_input(INPUT_POST, 'Address');
$PhoneNumber = filter_input(INPUT_POST, 'Phone_Number');
$Password= filter_input(INPUT_POST, 'password');
$gender= filter_input(INPUT_POST, 'gender');


if(!empty($FirstName)){
	if(!empty($Password)){
		$host="localhost";
		$dbusername ="root";
		$dbpassword ="";
		$bdname = "vehicleinsurence";
			
		$conn = new mysqli($host, $dbusername, $dbpassword, $vehicleinsurence);
		if(mysqli_connect_error()){
			die('connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
			}
		else{
			$sqlstmt=INSERT INTO 'person'('Person_Id', 'FirstName', 'LastName', 'Gender', 'DOB', 'Address', 'PhoneNumber') VALUES ('null','$FirstName','$LastName','$gender','$DOB','$Address','$PhoneNumber');
			if($conn->query($sqlstmt)==TRUE){
					echo "New record is inserted sucessfully";
				}
			else{
					echo "Error:".$sqlstmt."<br>".$conn->error;
				}
			$conn->close();
			}
		}
	else{
		echo "password should not be empty";
		die();
	}
}
else{
	echo "name should not be empty";
	die();
}
?>