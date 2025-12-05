<?php
$conn = mysqli_connect("localhost", "root", "", "shqiperiajone_db");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM reservations WHERE id=$id");
$res = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first = $_POST['first_name'];
    $email = $_POST['email'];
    $date = $_POST['preferred_date'];
    $guests = $_POST['guests'];

    $update = "UPDATE reservations SET 
                first_name='$first',
                email='$email',
                preferred_date='$date',
                guests='$guests'
               WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: dashboard.php");
        exit;
    }
}
?>

<h2>Edit Reservation</h2>

<form method="post">
    First Name: <input type="text" name="first_name" value="<?= $res['first_name'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $res['email'] ?>"><br><br>
    Date: <input type="date" name="preferred_date" value="<?= $res['preferred_date'] ?>"><br><br>
    Guests: <input type="number" name="guests" value="<?= $res['guests'] ?>"><br><br>

    <input type="submit" value="Update">
</form>
