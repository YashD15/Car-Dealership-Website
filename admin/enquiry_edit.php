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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $fname = mysqli_real_escape_string($conn, $_POST["fullname"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);

  $sql = "UPDATE enquiry SET fullname='$fname', email='$email' WHERE id=$id";
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    echo "<script>window.location.href='enquiry_db.php';</script>";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

if (isset($_GET["id"])) {
  $id = mysqli_real_escape_string($conn, $_GET["id"]);
  $sql = "SELECT * FROM enquiry WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["fullname"];
    $email = $row["email"];
  } else {
    echo "Record not found";
    exit;
  }
} else {
  echo "Invalid request";
  exit;
}

mysqli_close($conn);
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  Name: <input type="text" name="fullname" value="<?php echo $name; ?>"><br>
  Email: <input type="email" name="email" value="<?php echo $email; ?>"><br>
  <input type="submit" value="Update">
</form>
