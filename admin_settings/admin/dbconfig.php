<?php

$server_name = "localhost";
$db = "root";
$pass = "";
$db_name = "middlemen";

$connection = mysqli_connect("localhost","root","","middlemen");

$dbconfig = mysqli_select_db($connection,$db_name);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


















?>