<?php
//Check if user logged in successfully
session_start();
$test = $_SESSION['test'];
if($test!="true") {
    header("Location:admin/login.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "legendary";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $fname = mysqli_real_escape_string($conn, $_POST["fullname"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $deli = mysqli_real_escape_string($conn, $_POST["Delivered"]);

  $sql = "UPDATE purchase SET fullname='$fname', email='$email', Delivered='$deli' WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    echo "<script>window.location.href='purchase_db.php';</script>";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

if (isset($_GET["id"])) {
  $id = mysqli_real_escape_string($conn, $_GET["id"]);
  $sql = "SELECT * FROM purchase WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["fullname"];
    $email = $row["email"];
    $deli = $row['Delivered'];
  } else {
    echo "Record not found";
    exit();
  }
} 

mysqli_close($conn);
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  Name: <input type="text" name="fullname" value="<?php echo $name; ?>"><br>
  Email: <input type="email" name="email" value="<?php echo $email; ?>"><br>
  Delivered: <input type="text" name="Delivered" value="<?php echo $deli; ?>"><br>
  <input type="submit" value="Update">
</form>
