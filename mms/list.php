<?php

require_once 'partials/db.php';

$user = isset($_COOKIE['user'])?$_COOKIE['user']:'';

if(!empty($user)) {
    $sql = "SELECT * FROM movies WHERE username='$user'";
    } else {
    $sql = "SELECT * FROM movies";
    }

$result = mysqli_query($conn, $sql);

?>

<section class="movies_section">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Director</th>
                <th>Rating</th>
                <th>User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['director'] ?></td>
                    <td><?php echo $row['rating'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td>
                        <a class="edit" href="edit-movie.php?id=<?php echo $row['id'] ?>" class="btn btn-edit">Edit</a>
                        <a class="delete" href="delete-movie.php?id=<?php echo $row['id'] ?>" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>

            <?php
            if (mysqli_num_rows($result) == 0) { ?>
                <tr>
                    <td colspan="4">No movies found</td>
                </tr>
            <?php
            }
            ?>



        </tbody>
    </table>
</section>