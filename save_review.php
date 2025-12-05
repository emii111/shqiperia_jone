<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shqiperiajone_db";

// Connect to DB
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get POST data
$name = $_POST['name'];
$comment = $_POST['comment'];
$stars = $_POST['rating'];
$product_id = $_POST['tour_id'];

// Insert into reviews table
$sql = "INSERT INTO reviews (name, comment, stars, product_id) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssdi", $name, $comment, $stars, $product_id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: reviews.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
