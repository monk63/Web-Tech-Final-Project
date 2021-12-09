<!-- Source: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->

<?php 
    include('../admin_server.php')
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login Registration Page</title>
    <style>
    .background {
        background-image: url("https://images.unsplash.com/photo-1551522435-a13afa10f103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80");
   
    }
    </style>
    <link rel="stylesheet" type="text/css" href="../../registration/style.css">
</head>

<body class="background">
    <div class="header" style="background-color:red;">
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
            <button type="submit" class="btn" name="login_admin" style="background-color:blueviolet;" >Login</button>
        </div>
        <p>
            Not yet an Admin? <a href="register_admin.php">Admin Sign up</a>
        </p>
    </form>
</body>

</html>