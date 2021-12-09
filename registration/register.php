<!-- Source: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->

<?php include('../database/server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title >Registration Page</title>
    <style>
    .background {
        background-image: url("https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1583&q=80");
   
    }
  </style>
    <link rel="stylesheet" href="style.css">

</head>

<body class="background" >
  
    <div class="header" style="background-color:blue;" >
        <h2>Register</h2>
     </div>

     
    <form method="post" action="register.php">
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
        <div class="input-group" >
            <button type="submit" class="btn" name="reg_user" style="background-color:green;">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
    

</body>

</html>