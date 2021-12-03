<?php
    session_start();
    include('dbconfig.php');
    // connect to the database
$conn= mysqli_connect("localhost", "root", "", "middlemen");

if(isset($_POST['submit'])){
    $car_name     =$_POST['car_name'];
 //  $target = "cars/".basename($_FILES['image']['name']);
    $car_image    =$_FILES['image']['name'];

    $price        =$_POST['price'];
    $year         =$_POST['years'];
    $transmission =$_POST['transmission'];
    $mileage      =$_POST['mileage'];
  
    //check if files already exist.
    if(file_exists("cars/" .$_FILES["image"]["name"]))
    {
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.' ";
        header('Location: home.php');
    }
        else{
            $query = "INSERT INTO oldcars (car_name,car_image,price,years,transmission,mileage) VALUES
            ('$car_name','$car_image','$price','$year',$transmission,'$mileage')";

            $run=mysqli_query($conn,$query);

            if ($run){
                move_uploaded_file($_FILES["image"]["tmp_name"], "cars/".$_FILES["image"]["name"]);

                $_SESSION['SUCCESS']= "Vehicle Upload Successfully";
                header("Location: home.php");

            }else{
                $_SESSION['SUCCESS']= "Vehicle Not Upload";
               header("Location: home.php");
            }

        }
        

       
}

?>