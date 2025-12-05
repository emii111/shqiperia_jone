<?php
session_start();

// OPTIONAL: mbrojtje që vetëm admin mund të fshijë
// if ($_SESSION['role'] != 'admin') {
//     die("Unauthorized access");
// }

$conn = mysqli_connect("localhost", "root", "", "shqiperiajone_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Kontrollo që ID është dërguar
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: No review ID provided in URL.");
}

$id = intval($_GET['id']);

// Fshi review-n
$delete = mysqli_query($conn, "DELETE FROM reviews WHERE id=$id");

if (!$delete) {
    die("Error deleting review: " . mysqli_error($conn));
}

header("Location: dashboard.php");
exit;
?>
