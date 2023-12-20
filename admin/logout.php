<?php
session_start();
$_SESSION['test'] = 'false';
header("Location:login.php");
?>