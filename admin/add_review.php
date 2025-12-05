<?php
$conn = mysqli_connect("localhost", "root", "", "shqiperiajone_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $stars = intval($_POST['stars']);

    // Insert query pa product_id
    $sql = "
        INSERT INTO reviews (name, comment, stars) 
        VALUES ('$name', '$comment', $stars)
    ";

    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Review</title>
</head>
<body>

<h2>Add Review</h2>

<form method="POST">

    Name:<br>
    <input type="text" name="name" required><br><br>

    Stars:<br>
    <input type="number" name="stars" min="1" max="5" required><br><br>

    Comment:<br>
    <textarea name="comment" required></textarea><br><br>

    <button type="submit">Add Review</button>

</form>

</body>
</html>
