<?php 

include 'config.php';
error_reporting(0);
session_start();

$email = $_SESSION['email'];
$table = $_SESSION['type'];
$sql = "DELETE FROM $table WHERE email='$email'";
$result = mysqli_query($conn, $sql);
echo "<script>alert('Account has been Deleted Successfully..!!\nEmail: $email')</script>";
header("Location: logout.php");

?>