<!-- This checks if the user is login
     This page is only accessible to logged in users  -->

     <?php 
	include('database/server.php');
?>



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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
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
                        </ul>
                    </div>
                </div>
            </nav>

        </header>
        <!--end header section -->

      
    </div>


    <!--- Start of Vehicle Section --->
    <div class="cars" id="cars">
        <div class="heading">
            <span>New Cars</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde deleniti inventore atque reprehenderit
                sapiente ea animi ad minima ullam quam dolores eos, hic deserunt libero possimus eaque eveniet? Quasi,
                mollitia!</p>

        </div>
    </div>

    <!--- End of Vehicle Section --->

     <!--- Feature Car Section --->
     <section class="featured" id="featured">

        <h1 class="heading"> <span>New Featured</span> Cars </h1>
    
        <div class="swiper featured-slider">
    
           <div class="swiper-wrapper">
    
                <div class="swiper-slide box">
                    <img src="images/vehicle-1.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <img src="images/vehicle-2.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <img src="images/vehicle-3.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>
    
                <div class="swiper-slide box">
                    <img src="images/vehicle-4.png" alt="">
                    <div class="content">
                        <h3>new model</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">$55,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>
    
           </div>
    
           <div class="swiper-pagination"></div>
    
        </div>
     <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="images/vehicle-5.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="images/vehicle-6.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="images/vehicle-1.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="images/vehicle-2.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$55,000/-</div>
                     <a href="#" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

     <!--- End of Feature Car Section --->


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
                    <input type="email" name="email" class="text-input contact-input"
                        placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input"
                        placeholder="Your message..."></textarea>
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