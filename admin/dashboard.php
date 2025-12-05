<?php
session_start();

if ((!isset($_SESSION['first_name']) || (!isset($_SESSION['last_name'])))) {
    header('Location: ../sign_in.php');
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shqiperiajone_db";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user data from the database
$select_users = "SELECT id, first_name, last_name, email, role FROM users";
$users = mysqli_query($conn, $select_users);

//Fetch reservations data from the database
$select_reservations = "SELECT id, first_name, email, preferred_date, guests FROM reservations";
$reservations = mysqli_query($conn, $select_reservations);

 // Fetch reviews data from the database
 $select_reviews = "SELECT id, name, comment, stars, created_at FROM reviews ";
 $reviews = mysqli_query($conn, $select_reviews);
if (!$reviews) {
    die("Error: " . mysqli_error($conn));
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to Dashboard, <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?> 
       <a href="../logout_process.php"> | Logout</a>
    </h2>

    <h3>All Users | <a href="add_user.php">Add New User</a></h3>
    <!-- Display user data in a table -->
    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($users)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
                    <!-- Add more columns if needed -->
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <h3>All Reviews | <a href="add_review.php">Add New Review</a></h3>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Stars</th>
            <th>Comment</th>
            <th>Product ID</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($r = mysqli_fetch_assoc($reviews)) : ?>
            <tr>
                <td><?= $r['id'] ?></td>
                <td><?= $r['name'] ?></td>
                <td><?= $r['stars'] ?></td>
                <td><?= $r['comment'] ?></td>
                <td><?= $r['created_at'] ?></td>

                <td><a href="edit_review.php?id=<?= $r['id'] ?>">Edit</a></td>
                <td><a href="delete_review.php?id=<?= $r['id'] ?>" onclick="return confirm('Delete this review?')">Delete</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<h3>All Reservations | <a href="add_reservation.php">Add New Reservation</a></h3>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Guests</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($res = mysqli_fetch_assoc($reservations)) : ?>
            <tr>
                <td><?= $res['id'] ?></td>
                <td><?= $res['first_name'] ?></td>
                <td><?= $res['email'] ?></td>
                <td><?= $res['preferred_date'] ?></td>
                <td><?= $res['guests'] ?></td>

                <td><a href="edit_reservation.php?id=<?= $res['id'] ?>">Edit</a></td>
                <td>
                    <a href="delete_reservation.php?id=<?= $res['id'] ?>" 
                       onclick="return confirm('Are you sure you want to delete this reservation?')">
                       Delete
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>


</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
