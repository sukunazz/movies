<?php

require_once 'partials/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM movies WHERE id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: index.php");
} else {
    header("Location: movie-delete.php?id=$id");
}
