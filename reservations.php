<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shqiperiajone_db";

// Connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $date = mysqli_real_escape_string($conn, $_POST['preferred_date']);
    $guests = mysqli_real_escape_string($conn, $_POST['guests']);
    $requests = mysqli_real_escape_string($conn, $_POST['requests']);

    // Insert into database
    $sql = "INSERT INTO reservations 
        (first_name, last_name, email, phone, preferred_date, guests, requests)
        VALUES 
        ('$first_name', '$last_name', '$email', '$phone', '$date', '$guests', '$requests')";


    if (mysqli_query($conn, $sql)) {
        // Redirect after success
        header("Location: reservation_success.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
