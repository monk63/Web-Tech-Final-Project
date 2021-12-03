<?php

$server_name = "localhost";
$db = "root";
$pass = "";
$db_name = "middlemen";

$connection = mysqli_connect("localhost","root","","middlemen");

$dbconfig = mysqli_select_db($connection,$db_name);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
  echo " ";


?>