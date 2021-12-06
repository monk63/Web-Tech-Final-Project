<?php
    session_start();
    ob_start();
    include('dbconfig.php');
    ob_end_clean();

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $car_name     =$_POST['car_name'];

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
//Edit
if (isset($_POST['update'])){
    $id = $_POST['edited_id'];

    $car_name=$_POST['car_name'];
    $car_image    =$_FILES['image']['name'];
    $price        =$_POST['price'];
    $year         =$_POST['years'];
    $transmission =$_POST['transmission'];
    $mileage      =$_POST['mileage'];

     $data_query = "SELECT * FROM oldcars WHERE id='$id'";
     $data_run=mysqli_query($connection,$data_query);

     $fa_row = mysqli_fetch_assoc($data_run);

    
    // foreach($data_run as $fa_row)
    // {
        if ($car_image == NULL)
        {
            $image_data = $fa_row['image'];
        }else{
            //Replacing the image
            if ($img_path = "cars/".$fa_row['car_image']){
                unlink($img_path);
                $image_data=$car_image;
            }
        }
    // }

    $query = "UPDATE oldcars SET car_name='$car_name',car_image='$car_image',price='$price',years='$year',transmission='$transmission',mileage='$mileage' WHERE id='$id' ";

    // echo $query;
    // return;

    $query_run = mysqli_query($connection,$query);

    if ($query_run){

        if($car_image == NULL){

        $_SESSION['success']="Car Image Uploaded.";
        header('Location: home.php');
    } else{
        move_uploaded_file($_FILES["image"]["tmp_name"], "cars/".$_FILES["image"]["name"]);
        $_SESSION['success']="Car Image Updated.";
        header('Location: home.php');             

    }
} else{

    $_SESSION['success']="Update Failed";
    header('Location: home.php');             

    }
}


//Delete query
if (isset($_POST['data_delete'])){

    $id = $_POST['delete_id'];

    $query = "DELETE FROM oldcars WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        $_SESSION['success']="Data Deleted Successfully";
        header('Location: home.php');  
    }else{
        $_SESSION['success']="Data Not Deleted";
        header('Location: home.php'); 

    }

}
 



?>