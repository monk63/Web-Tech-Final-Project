<?php
   session_start();
//Database credentials
$server_name= "localhost";
$db_username= "root";
$pass="";
$db="middlemen";

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$conn= mysqli_connect('localhost', 'root', '', 'middlemen');

// REGISTER USER
if (isset($_POST['reg_admin'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);


    //Regex
    //Check for first name
    if (!preg_match('/[a-zA-Z]+$/', $username)) {
        $errors['username'] = 'Username should be letters only';
    }

 
     // validate email with regex
     $regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
     // set error if not an email
     if(!preg_match($regex, $email)){array_push($errors, "Enter a valid email");}

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }


    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $admin_check_query = "SELECT * FROM admins WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $admin_check_query);
    $admin = mysqli_fetch_assoc($result);

    if ($admin) { // if user exists
        if ($admin['username'] === $username) {
            array_push($errors, "Admin not authenticated!!!");
        }

        if ($admin['email'] === $email) {
            array_push($errors, " Please try again.");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO admins (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = " ";
        header('location: ../admin/login_admin.php');
    }
}

// LOGIN USER
if (isset($_POST['login_admin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Admin name is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = " ";
            header('location: ../../admin_settings/admin/home.php');
        } else {
            array_push($errors, "Wrong admin name/password combination");
        }
    }
}
