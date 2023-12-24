<?php
$conn = new mysqli("localhost", "root", "", "legendary");
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
$tax = 0.28 * $price;
$total = $price+$tax;

$sql = "INSERT INTO purchase (fname, lname, contact, email, brand, carname, category, color, price,tax,total) VALUES ('$fname','$lname','$contact','$email','$brand','$carname','$category','$color','$price','$tax','$total')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
    echo "<script>window.location.href='receipt.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
exit();
echo "<script>window.location.href='receipt.php';</script>";
?>