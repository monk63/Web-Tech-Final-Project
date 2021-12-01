<?php include('../../database/server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Registration Page</title>
    <link rel="stylesheet" type="text/css" href="../../registration/style.css">
</head>

<body>
    <div class="header">
        <h2>Admin Registration Page</h2>
    </div>

    <form method="post" action="register_admin.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register New Admin</button>
        </div>
        <p>
            Already an admin? <a href="login_admin.php">Sign in</a>
        </p>
    </form>
</body>

</html>