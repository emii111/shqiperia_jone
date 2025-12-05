<?php
session_start();

// OPTIONAL: mbrojtje që vetëm admin mund të editojë
// if ($_SESSION['role'] != 'admin') {
//     die("Unauthorized access");
// }

$conn = mysqli_connect("localhost", "root", "", "shqiperiajone_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Kontrollo që ID është dërguar
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: No review ID provided in URL.");
}

$id = intval($_GET['id']);

// Merr review nga databaza
$result = mysqli_query($conn, "SELECT * FROM reviews WHERE id=$id");

if (!$result || mysqli_num_rows($result) == 0) {
    die("Error: Review not found.");
}

$review = mysqli_fetch_assoc($result);

// Trajto form submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $stars = intval($_POST['stars']);

    $update_sql = "
        UPDATE reviews 
        SET name='$name', comment='$comment', stars=$stars
        WHERE id=$id
    ";

    if (mysqli_query($conn, $update_sql)) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error updating review: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Review</title>
</head>
<body>

<h2>Edit Review</h2>

<form method="POST">

    Name:<br>
    <input type="text" name="name" value="<?= htmlspecialchars($review['name']) ?>" required><br><br>

    Stars:<br>
    <input type="number" name="stars" min="1" max="5" value="<?= $review['stars'] ?>" required><br><br>

    Comment:<br>
    <textarea name="comment" required><?= htmlspecialchars($review['comment']) ?></textarea><br><br>

    <button type="submit">Update Review</button>

</form>

</body>
</html>
