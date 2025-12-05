<?php
$conn = mysqli_connect("localhost", "root", "", "shqiperiajone_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first = $_POST['first_name'];
    $email = $_POST['email'];
    $date = $_POST['preferred_date'];
    $guests = $_POST['guests'];

    $sql = "INSERT INTO reservations (first_name, email, preferred_date, guests)
            VALUES ('$first', '$email', '$date', '$guests')";

    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h2>Add Reservation</h2>

<form method="post">

    First Name: <input type="text" name="first_name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Date: <input type="date" name="preferred_date" required><br><br>
    Guests: <input type="number" name="guests" required><br><br>

    <input type="submit" value="Save">
</form>
