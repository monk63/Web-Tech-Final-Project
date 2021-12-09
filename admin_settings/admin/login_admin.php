<!-- Source: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->

<?php 
    include('../admin_server.php')
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../../registration/style.css">
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login_admin.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_admin">Login</button>
        </div>
        <p>
            Not yet an Admin? <a href="register_admin.php">Admin Sign up</a>
        </p>
    </form>
</body>

</html>