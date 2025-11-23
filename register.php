<?php
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

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

//inssert into users
$sql = "INSERT INTO users (first_name, last_name, email, password, role) VALUES ('$first_name',' $last_name', '$email', '$password', '$role');";

if (mysqli_query($conn, $sql)) {
    // echo "User created succesfully";

    // redirect to login page
    header('Location: login.php');
} else {
    echo "Error:" . $sql .  "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
