<?php
    session_start();
    include('../admin_server.php');


    // connect to the database
$conn= mysqli_connect('localhost', 'root', '', 'middlemen');

if(isset($POST['save'])){
    $car_name=$_POST['car_name'];
    $car_image=$_FILES['car_image']['name'];
    $price=$POST['price'];
    $year=$POST['year'];
    $transmission=$_POST['transmission'];
    $mileage=$_POST['mileage'];

    //check if files already exist.
    if(file_exists("upload/" .$_FILES["car_image"]["name"]))
    {
        $store = $_FILES["car_image"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.' ";
        header('Loaction: home.php');
    }
        else{
            $add = "INSERT INTO oldcars (car_name,car_image,price,year,transmission,mileage) VALUES
            ('$car_name','$car_image','$price','$year',$transmission,'$mileage') ";

            $run=mysqli_query($conn,$add);

            if ($run){
                move_uploaded_file(["car_image"]["tmp_name"],"cars/".$_FILES["car_image"]["name"]);

                $_SESSION['SUCESS']= "Vehicle Upload Successfully";

                header("Location: home.php");
            }

        }


}





?>