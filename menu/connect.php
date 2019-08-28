<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "tempowner";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	if(isset($_POST['submit']))

	$name = $_POST['Name'];
	$nic = $_POST['NIC'];
	$address = $_POST['Address'];
	$contactNo = $_POST['ContactNo'];
	$vehicleId = $_POST['VehicleID'];
	$vehicleModel = $_POST['VehicleModel'];

$sql = "INSERT INTO vehicleowners( Name, NIC, Address, ContactNo, VehicleID, VehicleModel) 
VALUES ('$name', '$nic', '$address' , '$contactNo' , '$vehicleId' , '$vehicleModel')";

}
if ($conn->query($sql) === TRUE) {
    echo "new record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>