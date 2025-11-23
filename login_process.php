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

$email = $_POST['email'];
$password = $_POST['password'];

// select user from db 
$sql = "SELECT * FROM users WHERE email = '$email';";

$result = mysqli_query($conn, $sql);
var_dump($result);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        // verify pass
        if (password_verify($password, $row['password']) && ($row['role'] === 'admin')) {
            // start a session for this user
            session_start();
            // $_SESSION['email'] = $email;
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['role'] = $row['role'];

            // redirect to dashboard if user is admin
            header('Location: admin/dashboard.php');
        } else {
            // redirect to index if user is not admin
            header('Location: shqiperiajone.php');
        }
    }
} else {
    echo "User not found!";
}
mysqli_close($conn);


// include "db.php";

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
//     $user = mysqli_fetch_assoc($result);

//     if ($user && password_verify($password, $user["password"])) {
        
//         $_SESSION["user_id"] = $user["id"];
//         $_SESSION["username"] = $user["username"];
//         $_SESSION["role"] = $user["role"];

//         if ($user["role"] == "admin") {
//             header("Location: admin/dashboard.php");
//         } else {
//             header("Location: index.php");
//         }
//         exit;
//     } else {
//         echo "<script>alert('Incorrect email or password');</script>";
//     }
// }

// <!DOCTYPE html>
// <html>
// <head><title>Login</title></head>
// <body>

// <h2>Login</h2>

// <form method="POST">
//     Email: <input type="email" name="email" required><br>
//     Password: <input type="password" name="password" required><br>

//     <button type="submit">Login</button>
// </form>

// <a href="register.php">Create new account</a>

// </body>
// </html>
