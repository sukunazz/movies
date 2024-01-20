<?php
require_once 'partials/db.php';

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
$result = mysqli_query($conn, $sql);

if ($result) {
    setcookie("user", $name, time() + 3600, "/");
    header("Location: index.php");
} else {
    header("Location: register.php");
}
