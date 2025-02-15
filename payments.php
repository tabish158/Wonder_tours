<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $tour_id = $_POST['tour_id'];
    $payment_method = $_POST['payment_method'];

    $query = "INSERT INTO payments (user_id, tour_id, payment_method) VALUES ('$user_id', '$tour_id', '$payment_method')";
    if (mysqli_query($conn, $query)) {
        echo "Payment successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
