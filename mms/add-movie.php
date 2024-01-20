<form action="movie-add.php" method="post" class="form-movie">
    <div class="group">
        <label for="name">Name</label>
        <input type="text" required name="name" id="name" placeholder="Movie name">
    </div>
    <div style="display: flex; gap: 10px;">
        <div class="group" style="flex: 1">
            <label for="director">Director</label>
            <input type="text" required name="director" id="director" placeholder="Movie director">
        </div>
        <div class="group" style="flex: 1">
            <label for="rating">Rating</label>
            <input type="number" min="1" max="10" required name="rating" id="rating" placeholder="Movie rating">
        </div>
    </div>
    <input type="submit" value="Add movie" class="button">

</form>