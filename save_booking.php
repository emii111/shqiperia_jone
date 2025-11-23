<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $first = $_POST["firstName"];
    $last = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phoneNumber"];
    $date = $_POST["preferredDate"];
    $guests = $_POST["numberOfGuests"];
    $requests = $_POST["specialRequests"];

    $sql = "INSERT INTO bookings 
    (first_name, last_name, email, phone, preferred_date, guests, requests)
    VALUES 
    ('$first', '$last', '$email', '$phone', '$date', '$guests', '$requests')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booking saved successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
