<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

echo "<h2>Admin Panel</h2>";
$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Booking ID: " . $row['id'] . " - User ID: " . $row['user_id'] . " - Tour ID: " . $row['tour_id'] . "<br>";
}
?>
