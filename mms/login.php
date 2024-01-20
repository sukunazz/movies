<?php include 'partials/header.php'; ?>


<form action="login-user.php" method="post" class="auth-form">
    <h1>Login</h1>
    <p class="form-text">
        Don't have an account? <a href="register.php">Register here</a>
    </p>
    <div class="group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Your username">
    </div>
    <div class="group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Your password">
    </div>
    <div class="group">
        <input type="submit" value="Login" class="button">
    </div>

</form>

<?php include 'partials/footer.php'; ?>