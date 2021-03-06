<!-- Source: https://www.youtube.com/watch?v=pft6jQHTU6U -->

<!DOCTYPE html>
<html lang="en">

<head>
  <!--basic-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Styling -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Bootstrap JS Styling -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Custom Styling -->
  <link rel="stylesheet" href="/admin_settings/admin/style/admin_style.css">

  <title>The Middlemen Garages</title>
  <style>
    .background {
        background-image: url("https://images.unsplash.com/photo-1619252584172-a83a949b6efd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80");
   
    }
</style>
</head>

<body class="background" style="font-weight:bold">

  <?php
  session_start();
  ob_start();
  include('dbconfig.php');
  ob_end_clean();
  ?>

  <!-- Modal -->
  <div class="modal fade" id="dash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <form action="control.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group">
              <label>Car Name</label>
              <input type="text" name="car_name" class="form-control" placeholder="Vehicle Name" required>
            </div>

            <div class="form-group">
              <label>Car Image</label>
              <input type="file" name="image" id="images" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Price</label>
              <input type="text" name="price" class="form-control" placeholder="Price" required>
            </div>

            <div class="form-group">
              <label>Year</label>
              <input type="date" name="years" class="form-control" placeholder="Date" required>
            </div>

            <div class="form-group">
              <label>Transmission</label>
              <input type="text" name="transmission" class="form-control" placeholder="Transmission" required>
            </div>

            <div class="form-group">
              <label>Mileage</label>
              <input type="text" name="mileage" class="form-control" placeholder="Mileage" required>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
      echo '<h2 class="bg-primary text-white"> ' . $_SESSION['success'] . '</h2>';
      unset($_SESSION['success']);
    }
    if (isset($_SESSION['status']) && $_SESSION['status'] != ' ') {
      echo '<h2 class= "bg-danger text-white">' . $_SESSION['status'] . '</h2>';
      unset($_SESSION['status']);
    }

    ?>

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dash">
      Add Car
    </button>
  </div>

  <!-- Car Table -->
  <div class="table-responsive">

  <!-- Fetching data from database -->
    <?php
    $connection = mysqli_connect("localhost","root","","middlemen");
    $query = "SELECT * FROM oldcars";
    $run = mysqli_query($connection,$query);
    ?>

 <!-- Table Head -->
    <table class="table table-bordered" id="dataTable" width="100" collspacing="0">
      <thread>
        <tr>
          <th>Car</th>
          <th>Image</th>
          <th>Price</th>
          <th>Year</th>
          <th>Transmission</th>
          <th>Mileage</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      <thread>
        <tbody>

        <?php
          if(mysqli_num_rows($run) > 0){
            while ($row = mysqli_fetch_assoc($run)){

        ?>
          <tr>
              <td> <?php echo $row['car_name'] ?>    </td>
              <td> <?php echo '<img src="cars/' .$row['car_image'].'" width="100px";height="100px";alt".pdf file"> '?>   
             </td> 
              <td> <?php echo $row['price'] ?>       </td>
              <td> <?php echo $row['years']?>        </td>
              <td> <?php echo $row['transmission']?> </td>
              <td> <?php echo $row['mileage']?>      </td>

              <!-- Edit button form  -->
              <td>
               
              <form action="edit.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                <button type="submit" name="data_edit" class="btn btn-info">Edit</button>
              </form>
    
              </td>

              <!-- Delete button form  -->
              <td>
              <form action="control.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?> ">
                  <button type="submit" name="data_delete" class="btn btn-warning">Delete</button>
              </form>
            
            </td>

          </tr>
          <?php
            }
          }else{
            echo "No vehicle found!";
          }

          ?>
        </tbody>
    </table>
  </div>

  <li class="nav-item">
                <a class="nav-link"  style="color: red;" href="login_admin.php">Logout</a>
              </li>

</body>

</html>