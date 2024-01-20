<?php include 'partials/header.php'; ?>


<form action="register-user.php" method="post" class="auth-form">
    <h1>Register</h1>
    <p class="form-text">
        Already have an account? <a href="login.php">Login here</a>
    </p>
    <div class="group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name">
    </div>
    <div class="group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Your username">
    </div>
    <div class="group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Your password">
    </div>
    <div class="group">
        <input type="submit" value="Register" class="button">
    </div>

</form>

<?php include 'partials/footer.php'; ?>