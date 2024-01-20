<?php

require_once 'partials/db.php';

$id = $_GET['id'];
$name = $_POST['name'];
$director = $_POST['director'];
$rating = $_POST['rating'];

$sql = "UPDATE movies SET name = '$name', director = '$director', rating = '$rating' WHERE id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: index.php");
} else {
    header("Location: movie-edit.php?id=$id");
}
