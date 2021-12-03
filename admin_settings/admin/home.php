

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

</head>

<body>

<?php
include('dbconfig.php');
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
              <input type="file" name="car_image" id="images" class="form-control" required>
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
            <button type="submit" name="save" class="btn btn-info">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container-fluid">
      <?php
        if(isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
          echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].'</h2>';
          unset($_SESSION['success']);
        }
        if(isset($_SESSION['status']) && $_SESSION['status'] !=' ')
        {
          echo '<h2 class= "bg-danger text-white">'.$_SESSION['status'].'</h2>';
          unset($_SESSION['status']);
        }

      ?>
       
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#dash">
      Add Car
    </button>


  </div>






</body>

</html>