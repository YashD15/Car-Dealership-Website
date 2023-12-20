<?php
$conn = mysqli_connect('localhost','id19254013_legendary','luffY@10','id19254013_legendary');
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$uname = $_POST['uname'];
$thoughts = $_POST['thoughts'];

$sql = "INSERT INTO comments (uname,thoughts) VALUES ('$uname','$thoughts')";
$res = mysqli_query($conn, $sql);

mysqli_close($conn);
echo "<script>window.location.href='contact_us.php';</script>";
?>