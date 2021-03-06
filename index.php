<!-- Source: https://www.youtube.com/watch?v=Thw33qJ5DXo -->
<!-- Source: https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->
<?php 
	include('database/server.php');
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

  <!-- Custom Styling -->
  <link rel="stylesheet" href="style/style.css">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

  <!-- responsive style -->
  <link href="style/responsive.css" rel="stylesheet" />

  <title>The Middlemen Garages</title>

</head>

<body data-spy="scroll" data-target="#navbarResponsive">

  <!-- Home Section -->
  <div id="home">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
       <!-- logged in user information -->
       <?php  if (isset($_SESSION['username'])) : ?>
    
    <!-- Header Section -->
    <header class="header_section">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <!--The Middlemen Garage-->
            <img src="images/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
              <li class="nav-item">
              <p class="nav-link" style="color: green;">Welcome <strong><?php echo $_SESSION['username']; ?>
            </strong>
          </p>
              </li>
              <li class="nav-item">
               <a class="nav-link"  href="index.php?logout='1'" style="color: red;">logout</a> 
    <?php endif ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>
    <!--end header section -->

    <!--Image Slider Section --->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/imgcar1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome To The Middlemen Carage</h5>
            <p>The Best Place to Buy Used Cars at Affordable Prices</p>
            <a class="btn btn-outline-light btn-lg" href="usedcars.php">Used Cars</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/imgcar2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome To The Middlemen Carage</h5>
            <p>The Best Place to New Cars at the Best Market Rate</p>
            <a class="btn btn-outline-light btn-lg" href="newcars.php">Fresh Wheels</a>

          </div>
        </div>
        <div class="carousel-item">
          <img src="images/imgcar3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome To The Middlemen Carage</h5>
            <p>Get in Touch With a Team of Highly Skilled Personnels.</p>
            <a class="btn btn-outline-light btn-lg" href="contact.php">Contact Us</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!---End of Image Slider Section --->
  </div>

  <!--- Start of Contact Section --->
  <div id="contact" class="offset">

    <div class="col-12 narrow text-center ">
      <p>

      </p>
      <h1> CONTACT </h1>
      <p class="lead"> Working 24/7 to get you the best car deals
      <p  class="lead"> in the market.
      </p>
      <br> 
      Get in touch with our team today.
    </p>
      <a class="btn btn-secondary btn-md" href="contact.php"> CLICK FOR MORE ENQUIRES</a>
      <p>


      </p>
    </div>

  </div>

  <!--- End of Contact Section --->

  <!--- Start of Icon Section --->

  <section class="icons-container">

    <div class="icons">
      <i class="fas fa-home"></i>
      <div class="content">
        <h3>20+</h3>
        <p>Branches</p>
      </div>
    </div>

    <div class="icons">
      <i class="fas fa-car"></i>
      <div class="content">
        <h3>4770+</h3>
        <p>Cars Sold</p>
      </div>
    </div>

    <div class="icons">
      <i class="fas fa-users"></i>
      <div class="content">
        <h3>4000+</h3>
        <p>Satisfied Clients</p>
      </div>
    </div>

    <div class="icons">
      <i class="fas fa-car"></i>
      <div class="content">
        <h3>200+</h3>
        <p>Garages in Accra</p>
      </div>
    </div>

  </section>


  <!--- End of Icon Section --->

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
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/the_middlemen_/"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>
        <br>
        <ul>
          <a href="contact.php">
            <li>Customer Reviews</li>
          </a>
          <a href="about.php">
            <li>Services</li>
          </a>
          <a href="contact.php">
            <li>Stories</li>
          </a>
          <a href="about.php">
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



  <script src="js/script.js"></script>



  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>





</body>



</html>