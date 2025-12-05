<?php
$conn = mysqli_connect("localhost", "root", "", "shqiperiajone_db");

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Reservation ID not provided!");
}

$id = intval($_GET['id']);

$sql = "DELETE FROM reservations WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
    exit;
} else {
    echo "Error deleting reservation: " . mysqli_error($conn);
}
