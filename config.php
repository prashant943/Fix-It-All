<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "fixitall";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn)
    die("<script>alert('Database Connection Failed. Please Try Again!')</script>");

?>