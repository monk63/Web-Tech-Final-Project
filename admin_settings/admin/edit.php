<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
    <!-- Bootstrap Styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap JS Styling -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom Styling -->
    <link rel="stylesheet" href="/admin_settings/admin/style/admin_style.css">

</head>

<body>

    <?php
    session_start();
    ob_start();
    include('dbconfig.php');
    ob_end_clean();

    ?>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                      Edit Car
                </h6>
            </div>
            <div class="card-body">
                <?php
                     $connection = mysqli_connect("localhost","root","","middlemen");
                    //  <!-- Edit Query session -->

                    if (isset($_POST['data_edit'])){
                        $id =$_POST['edit_id'];

                        $query = "SELECT * FROM oldcars WHERE id = '$id' ";
                        $query_run = mysqli_query($connection,$query);

                        foreach ($query_run as $row){
                ?>
                  <form action="control.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="edited_id" value="<?php echo $row['id'] ?>">

                      <div class="form-group">
                          <label> Car Name</label>
                          <input type="text" name="car_name" value="<?php echo $row['car_name'] ?>" class= "form-control">
                      </div>

                      <div class="form-group">
                          <label> Update Image</label>
                          <input type="file" name="image" value="<?php echo $row['car_image'] ?>" class= "form-control">
                      </div>


                      <div class="form-group">
                          <label> Price</label>
                          <input type="text" name="price" value="<?php echo $row['price'] ?>" class= "form-control">
                      </div>

                      <div class="form-group">
                          <label> Year</label>
                          <input type="date" name="years" value="<?php echo $row['years'] ?>" class= "form-control">
                      </div>

                      <div class="form-group">
                          <label> Transmission</label>
                          <input type="text" name="transmission" value="<?php echo $row['transmission'] ?>" class= "form-control">
                      </div>

                      <div class="form-group">
                          <label> Mileage</label>
                          <input type="text" name="mileage" value="<?php echo $row['mileage'] ?>" class= "form-control">
                      </div>

                      <div class="modal-footer">
                          <a href="home.php"><button type="button" class="btn btn-secondary">CLOSE</button></a>
                          <button type="submit" name="update" class="btn btn-primary">Update Car</button>
                      </div>
                  </form>
                  <?php
                }
            
            }                             
                  ?>

            </div>
        </div> 
    </div>

</body>

</html>