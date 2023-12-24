<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "legendary";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$brand = $_POST['brand'];
$carname = $_POST['carname'];
$category = $_POST['category'];
$color = $_POST['color'];
$price = $_POST['price'];


// Insert data into table
$sql = "INSERT INTO purchase (fname, lname, contact, email, brand, carname, category, color, price) VALUES ('$fname','$lname','$contact','$email','$brand','$carname','$category','$color','$price')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
    // echo "<script>window.location.href='cars_at_us.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();
// echo "<script>window.location.href='cars_at_us.php';</script>";
?>