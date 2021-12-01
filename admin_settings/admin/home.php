<?php 
	include('admin_server.php');
?>


<!-- This checks if the user is login
     This page is only accessible to logged in users  -->
<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_admin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login_admin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--basic-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <!-- Custom Styling -->
  <link rel="stylesheet" href="style/style.css">



  <title>The Middlemen Garages</title>

</head>

<body >
<h1>Welcome friends</h1>


</body>



</html>