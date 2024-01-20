<?php
require_once 'partials/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM movies WHERE id = $id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>
<?php include 'partials/header.php'; ?>

<form class="form-edit" action="movie-edit.php?id=<?php echo $id ?>" method="post" class="form-movie">
    <div class="group">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php echo $row['name'] ?>" id="name" placeholder="Movie name">
    </div>
    <div style="display: flex; gap: 10px;">
        <div class="group" style="flex: 1">
            <label for="director">Director</label>
            <input type="text" value="<?php echo $row['director'] ?>" name="director" id="director" placeholder="Movie director">
        </div>
        <div class="group" style="flex: 1">
            <label for="rating">Rating</label>
            <input type="number" value="<?php echo $row['rating'] ?>" name="rating" id="rating" placeholder="Movie rating">
        </div>
    </div>
    <input type="submit" value="Edit movie" class="button">

</form>

<?php include 'partials/footer.php'; ?>