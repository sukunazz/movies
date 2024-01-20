<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Library</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="header">
        <a href="index.php" class="logo">
            <h2>Movies</h2>
        </a>

        <div class="nav">
            <?php if (isset($_COOKIE['user'])) : ?>
                <span><?php echo $_COOKIE['user'] ?></span>
                <a href="logout.php">Logout</a>

            <?php else : ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </div>
    </header>