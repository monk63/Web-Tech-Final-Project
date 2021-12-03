<?php
    session_start();
    ob_start();
    include('dbconfig.php');
    ob_end_clean();

    /** 
       if(isset($_POST['submit'])){
        $car_name     =$_POST['car_name'];

        //Source: https://www.11zon.com/zon/php/how-to-insert-image-in-mysql-database-using-php.php

        $var1 = rand(1111,9999);  // generate random number in $var1 variable
        $var2 = rand(1111,9999);  // generate random number in $var2 variable
  
        $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
        $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

        $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
        $dst = "./cars/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
        $dst_db = "cars/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
        move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name   

        $price        =$_POST['price'];
        $year         =$_POST['years'];
        $transmission =$_POST['transmission'];
        $mileage      =$_POST['mileage'];
    
    //    $query = mysqli_query($connection,"INSERT INTO oldcars (car_name,car_image,price,years,transmission,mileage) VALUES  
    //    ('$car_name','$car_image','$price','$year',$transmission,'$mileage')");

    $query = mysqli_query($connection,"INSERT INTO oldcars (car_name,car_image,price,years,transmission,mileage) VALUES  
        ('$car_name','$car_image','$price','$year','$transmission','$mileage')");
            
            

             if($query)
             {
                echo '<script> alert("Data Inserted Seccessfully!"); </script>';  // alert message
                header("location: home.php ");
            }
            else
            {
                echo '<script> alert("Error Uploading Data!"); </script>';  // when error occur
                header("location: home.php ");
            }
            
        }

        */

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
            ('$car_name','$car_image','$price','$year','$transmission','$mileage')";

            $run=mysqli_query($connection,$query);

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