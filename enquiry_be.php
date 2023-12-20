<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "legendary";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $contact = mysqli_real_escape_string($conn, $_POST["cno"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    $enquirytype = mysqli_real_escape_string($conn, $_POST["enquirytype"]);

    $sql = "INSERT INTO enquiry (fullname, contact, email, state, enquirytype) 
            VALUES ('$fullname', '$contact', '$email', '$state', '$enquirytype')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Enquiry submitted successfully!');</script>";
        echo "<script>window.location.href='enquiry.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
echo "<script>window.location.href='enquiry.html';</script>";
?>