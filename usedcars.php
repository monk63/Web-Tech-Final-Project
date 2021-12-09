<!-- Source: https://www.youtube.com/watch?v=tuURYMcX8S8&t=4888s -->

<!-- Source of template: https://www.free-css.com/template-categories/cars
Source of template: https://github.com/codeSkill2020/Complete-Car-Website/blob/main/Files%20-%20Copy.rar -->

<?php
ob_start();
include('database/server.php');
ob_end_clean();
?>

<!-- This checks if the user is login
     This page is only accessible to logged in users  -->
<?php

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: registration/login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: registration/login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!--basic-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- Custom Styling -->
  <link rel="stylesheet" href="style/style.css">

  <!-- Boostrap Styling -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <title>The Middlemen Garage</title>

</head>

<body data-spy="scroll" data-target="#navbarResponsive">

  <!-- Home Section -->
  <div id="home">

    <!-- Header Section -->
    <header class="header_section">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <!--The Middlemen Garage-->
            <img src="images/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="usedcars.php">Used Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="newcars.php">New Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>
    <!--end header section -->
  </div>

  <!--- Start of Vehicle Section --->
  <div class="cars">
    <div class="container">
      <div class="heading">
        <span>Used Cars</span>
        <p> Select from the best option of used cars in the market.</p>
      </div>
    </div>
  </div>

  <!--- End of Vehicle Section --->

  <!--- Start of Vehicle Sliders Section --->
  <section class="vehicles" id="vehicles">

    <h1 class="heading"> Popular Used <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide box">
          <img src="images/vehicle-1.png" alt="">
          <div class="content">
            <h3>Toyota Camry</h3>
            <div class="price"> <span>Price : </span> ₵45,000 </div>
            <p>
              Foreign used
              <span class="fas fa-circle"></span> 2012
              <span class="fas fa-circle"></span> Automatic
              <span class="fas fa-circle"></span> Petrol
              <span class="fas fa-circle"></span> 56323 miles
            </p>
            <a href="#" class="btn">CHECK OUT</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="images/vehicle-2.png" alt="">
          <div class="content">
            <h3> Toyota Corrolla</h3>
            <div class="price"> <span>Price : </span> ₵34,000 </div>
            <p>
              Hone used
              <span class="fas fa-circle"></span> 2018
              <span class="fas fa-circle"></span> Automatic
              <span class="fas fa-circle"></span> Petrol
              <span class="fas fa-circle"></span> 34983 miles
            </p>
            <a href="#" class="btn">CHECK OUT</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="images/vehicle-3.png" alt="">
          <div class="content">
            <h3> Toyota Corrolla</h3>
            <div class="price"> <span>Price : </span> ₵24,000 </div>
            <p>
              Hone used
              <span class="fas fa-circle"></span> 2010
              <span class="fas fa-circle"></span> Automatic
              <span class="fas fa-circle"></span> Petrol
              <span class="fas fa-circle"></span> 110232 miles
            </p>
            <a href="#" class="btn">CHECK OUT</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="images/vehicle-4.png" alt="">
          <div class="content">
            <h3>Hyundia iX35</h3>
            <div class="price"> <span>Price : </span> $62,000 </div>
            <p>
              Foreign used
              <span class="fas fa-circle"></span> 2013
              <span class="fas fa-circle"></span> Automatic
              <span class="fas fa-circle"></span> Petrol-Hybrid
              <span class="fas fa-circle"></span> 764532 miles
            </p>
            <a href="#" class="btn">CHECK OUT</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="images/vehicle-5.png" alt="">
          <div class="content">
            <h3>Hyundia Elantra</h3>
            <div class="price"> <span>Price : </span> ₵18,000 </div>
            <p>
              Home Use
              <span class="fas fa-circle"></span> 2010
              <span class="fas fa-circle"></span> Automatic
              <span class="fas fa-circle"></span> Petrol
              <span class="fas fa-circle"></span> 86453 miles
            </p>
            <a href="#" class="btn">CHECK OUT</a>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="images/vehicle-6.png" alt="">
          <div class="content">
            <h3>Kia Morning </h3>
            <div class="price"> <span>Price : </span> ₵36,000 </div>
            <p>
              Home Used
              <span class="fas fa-circle"></span> 2001
              <span class="fas fa-circle"></span> Manual
              <span class="fas fa-circle"></span> Diesel
              <span class="fas fa-circle"></span> 231312 miles
            </p>
            <a href="#" class="btn">CHECK OUT</a>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!--- End of Vehicle Sliders Section --->

  <!--- ADD add section --->
  <!-- Old cars -->
  <section class="article">
    <div class="container py-5">
      <h1 class="text-center">Avaliable Cars</h1><br>
      <div class="row">

        <?php
        ob_start();
        include 'admin_settings/admin/dbconfig.php';
        ob_end_clean();
        $sel = "SELECT * FROM oldcars";
        $que = mysqli_query($connection, $sel);
        while ($row = mysqli_fetch_array($que)) {
        ?>

          <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
            <div class="card">
              <img src="admin_settings/admin/cars/<?php echo $row['car_image']; ?>">
              <p class="pt-3"><a href="#"><?php echo $row['car_name'] ?></a></p>
              <span id="cost"><?php echo $row['price'] ?> </span>
              <span id="name">HATCHBACK</span>
              <small>
                <a href="#"><?php echo $row['years'] ?></a>
                <a href="#"><?php echo $row['transmission'] ?> </a>
                <a href="#"> <?php echo $row['mileage'] ?></a>
              </small>
            </div>
          </div>
        <?php
        }
        ?>
  </section>

  <!-- End of Old cars -->

  <!-- footer -->
  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <h1 class="logo-text"><span>The</span>Middlemen</h1>
        <p>
          <img src="images/logo.png" height="100" width="100" />
          The web portal to the world of wholesale auction.
        </p>
        <div class="contact">
          <span><i class="fas fa-phone"></i> &nbsp; +233 20 95 35 914</span>
          <span><i class="fas fa-envelope"></i> &nbsp; info@themiddlemen59@gmail.com</span>
        </div>
        <div class="socials">
          <a href="https://www.instagram.com/the_middlemen_/"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/the_middlemen_/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.instagram.com/the_middlemen_/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/the_middlemen_/"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <a href="#">
            <li>Customer Reviews</li>
          </a>
          <a href="#">
            <li>Services</li>
          </a>
          <a href="#">
            <li>Stories</li>
          </a>
          <a href="#">
            <li>News</li>
          </a>
          <a href="#">
            <li>Terms and Conditions</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form">
        <h2>Contact us</h2>
        <br>
        <form action="index.html" method="post">
          <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
          <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big contact-btn">
            <i class="fas fa-envelope"></i>
            Send
          </button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; The Middlemen Garage. Est. 2021. All rights reserved
    </div>
  </div>
  <!-- End of footer -->

  <!-- Slider JS -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- Main JS -->
  <script src="js/script.js"></script>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>