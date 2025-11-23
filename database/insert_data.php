<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shqiperiajone_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// create an user for admin
$password = password_hash('admin', PASSWORD_DEFAULT); // hash password
$sql = "INSERT INTO users (first_name, last_name, email, password, role) VALUES ('Admin','Admin' ,'admin@gmail.com', '$password', 'admin');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>