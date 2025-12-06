<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shqiperiajone_db";

// Krijo lidhjen me DB
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Përfshin lidhjen me databazën
include "shqiperiajone_db.php"; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Merr të dhënat nga forma 
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $preferred_date = mysqli_real_escape_string($conn, $_POST['preferred_date']);
    $guests = mysqli_real_escape_string($conn, $_POST['guests']);
    $requests = mysqli_real_escape_string($conn, $_POST['requests']);

    // Krijo query për insert në tabelën reservations
    $sql = "INSERT INTO reservations 
            (first_name, last_name, email, phone, preferred_date, guests, requests)
            VALUES 
            ('$first_name', '$last_name', '$email', '$phone', '$preferred_date', '$guests', '$requests')";

    // Ekzekuto query-n dhe kontrollo gabimet
    if (mysqli_query($conn, $sql)) {
        // Rezervimi u ruajt me sukses
        echo "<script>alert('Reservation saved successfully!'); window.location='shqiperiajone.php';</script>";
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Mbyll lidhjen me databazën
mysqli_close($conn);
?>
