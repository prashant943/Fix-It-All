<?php 

include 'config.php';
session_start();

$sid = $_POST['sid'];
$sqlBase = "DELETE FROM services WHERE servid='$sid'";
$resultBase = mysqli_query($conn, $sqlBase);
if (isset($_SESSION['email']) && $_SESSION['type'] == "customers")
    header("Location: cust.php");
else if (isset($_SESSION['email']) && $_SESSION['type'] == "mechanics")
    header("Location: mech.php");
?>