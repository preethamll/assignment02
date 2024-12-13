<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dl = $_POST['dl'];
$vehicle = $_POST['vehicle'];
$checkInDatetime = $_POST['checkInDatetime'];
$vehicle_type = $_POST['vehicle_type'];

// Insert data into database
$sql = "INSERT INTO vehicle(name, email, phone, dl, vehicle, checkInDatetime,vehicle_type)
VALUES ('$name', '$email', '$phone', '$dl','$vehicle','$checkInDatetime','$vehicle_type')";

if ($conn->query($sql) === TRUE) {
    echo "registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Parking Details</Details></h1>
        <p><strong>Name:</strong> <?= ($name) ?></p>
        <p><strong>Email:</strong> <?= ($email) ?></p>
        <p><strong>Phone Number:</strong> <?= ($phone) ?></p>
        <p><strong>DL number:</strong> <?= ($dl) ?></p>
        <p><strong>vehicle registration number:</strong> <?= ($vehicle) ?></p>
        <p><strong>vehicle type :</strong> <?= ($vehicle_type) ?></p>

         </p>
    </div>
</body>
</html>
