<?php
//Check if user logged in successfully
session_start();
$test = $_SESSION['test'];
if($test!="true") {
    header("Location:admin/login.php");
}
$servername = "localhost";
$username = "id19254013_legendary";
$password = "luffY@10";
$dbname = "id19254013_legendary";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET["id"])) {
  $id = mysqli_real_escape_string($conn, $_GET["id"]);
  $sql = "DELETE FROM enquiry WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record deleted successfully');</script>";
    echo "<script>window.location.href='enquiry_db.php';</script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
    exit();
    header("Location: enquiry_db.php");
  }
} else {
  echo "Invalid request";
  exit;
}
mysqli_close($conn);
?>
