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

$sql_create_table_users = "CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql_create_table_users)) {
    echo "<br> Table users created succesfully";
} else {
    echo "<br> Error creating table users: <br>" . mysqli_error($conn);
}

$sql_create_table_reservation = "CREATE TABLE reservation(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    first_name VARCHAR(250),
    last_name VARCHAR(250),
    email VARCHAR(250),
    phone VARCHAR(250),
    preferred_date DATE,
    guests INT,
    requests TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql_create_table_reservation)) {
    echo "<br> Table reservation created succesfully";
} else {
    echo "<br> Error creating table reservation: <br>" . mysqli_error($conn);
}

$sql_create_table_reviews = "CREATE TABLE reviews(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    comment VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    stars INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (mysqli_query($conn, $sql_create_table_students)) {
    echo "<br> Table reservation created successfully";
} else {
    echo "<br> Error creating table reservation: <br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>