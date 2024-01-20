<?php
require_once 'partials/db.php';

$name = $_POST['name'];
$director = $_POST['director'];
$rating = $_POST['rating'];
$username = $_COOKIE['user'];

$sql = "INSERT INTO movies (name, director, rating, username) VALUES ('$name', '$director', '$rating', '$username')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: index.php");
} else {
    header("Location: movie-add.php");
}
