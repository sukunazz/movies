<?php

require_once 'partials/db.php';

?>

<?php include 'partials/header.php'; ?>
<main>
    <?php
    if (isset($_COOKIE['user'])) {
        include 'add-movie.php';
    }
    ?>
</main>

<?php


    include 'list.php';
?>

<?php include 'partials/footer.php'; ?>