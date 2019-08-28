<html>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "tempowner";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$dbname);




$sql = "SELECT  Name, NIC, Address, ContactNo, VehicleID, VehicleModel FROM vehicleowners";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"] . "NIC" . $row["NIC"]. "Address " . $row["Address"].  "Contact Number " . $row["ContactNo"].
		 "VehicleID " . $row["VehicleID"].  "VehicleModel" . $row["VehicleModel"]. "<br>";
    }
} else {
    echo "0 results";
}
	?>
	</body>
    </html>