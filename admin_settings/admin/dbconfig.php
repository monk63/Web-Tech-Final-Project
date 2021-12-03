<?php

$connection = mysqli_connect("localhost","root","","middlemen");


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo "Unsuccessful connnection";
  }
  echo "Connnected Succcessful";

 
 

    
?>