<?php
 include('../admin_server.php')

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Registration Page</title>
    <style>
    .background {
        background-image: url("https://images.unsplash.com/photo-1597986346643-d54491ef85bb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
   
    }
  </style>
    <link rel="stylesheet" type="text/css" href="../../registration/style.css">
</head>

<body class="background">
    <div class="header" style="background-color:blue;">
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
            <button type="submit" class="btn" name="reg_admin" style="background-color:green;">Register New Admin</button>
        </div>
        <p>
            Already an admin? <a href="login_admin.php">Sign in</a>
        </p>
    </form>
</body>

</html>