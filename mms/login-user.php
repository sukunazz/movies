<?php
require_once 'partials/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    setcookie("user", $user['name'], time() + 3600, "/");
    header("Location: index.php");
} else {
    header("Location: login.php");
}
