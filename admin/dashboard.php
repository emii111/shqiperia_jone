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

// Fetch reservations data from the database
// $select_reservation = "SELECT id, name, duration FROM reservation";
// $courses = mysqli_query($conn, $select_reservation);

// // Fetch reviews data from the database
// $select_students = "SELECT id, name, lastName, email, course_id, fee_paid, absences FROM students";
// $students = mysqli_query($conn, $select_students);


// if ((!$users) || (!$reservation) || (!$reviews)) {
//     die("Error: " . mysqli_error($conn));
// }

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
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
