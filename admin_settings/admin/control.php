<?php
    session_start();
    include('dbconfig.php');


    // connect to the database
$connection= mysqli_connect("localhost", "root", "", "middlemen");

if(isset($_POST['save'])){
    $car_name     =$_POST['car_name'];
    $car_image    =$_FILES['car_image']['name'];
    $price        =$_POST['price'];
    $year         =$_POST['years'];
    $transmission =$_POST['transmission'];
    $mileage      =$_POST['mileage'];

    //check if files already exist.
    if(file_exists("cars/" .$_FILES["car_image"]["name"]))
    {
        $store = $_FILES["car_image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.' ";
        header('Location: home.php');
    }
        else{
            $add = "INSERT INTO oldcars (car_name,car_image,price,years,transmission,mileage) VALUES
            ('$car_name','$car_image','$price','$year',$transmission,'$mileage')";

            $run=mysqli_query($connection,$add);

            if ($run){
                move_uploaded_file(["car_image"]["tmp_name"],"cars/".$_FILES["car_image"]["name"]);

                $_SESSION['SUCCESS']= "Vehicle Upload Successfully";
               header("Location: home.php");

            }else{
                $_SESSION['SUCCESS']= "Vehicle Not Upload";
               header("Location: home.php");
            }

        }
}

?>