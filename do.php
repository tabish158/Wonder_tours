<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "wonder_tours";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
