<?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shqiperiajone_db";

// Krijo lidhjen
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// --- 1. Tabela USERS ---
$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
)";
if (mysqli_query($conn, $sql_users)) {
    echo "Tabela 'users' u krijua ose ekziston.<br>";
} else {
    echo "Gabim në krijimin e tabelës 'users': " . mysqli_error($conn) . "<br>";
}

// --- 2. Tabela RESERVATIONS ---
$sql_reservations = "CREATE TABLE IF NOT EXISTS reservations (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    preferred_date DATE,
    guests INT,
    requests TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
)";
if (mysqli_query($conn, $sql_reservations)) {
    echo "Tabela 'reservations' u krijua ose ekziston.<br>";
} else {
    echo "Gabim në krijimin e tabelës 'reservations': " . mysqli_error($conn) . "<br>";
}

// --- 3. Tabela REVIEWS ---
$sql_reviews = "CREATE TABLE IF NOT EXISTS reviews (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    comment TEXT NOT NULL,
    stars INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
)";
if (mysqli_query($conn, $sql_reviews)) {
    echo "Tabela 'reviews' u krijua ose ekziston.<br>";
} else {
    echo "Gabim në krijimin e tabelës 'reviews': " . mysqli_error($conn) . "<br>";
}

// Mbyll lidhjen
mysqli_close($conn);
?>
