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

    <!--Our Team section -->
     
    <div class="wrapper">
  <h1>Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="images/pic-1.png" alt="Team_image">
      </div>
      <h3>Paul Doe</h3>
      <p class="role">UI developer</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="images/pic-10.png" alt="Team_image">
      </div>
      <h3>Rosie Meg</h3>
      <p class="role">Tester</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p></div>
    <div class="team_member">
      <div class="team_img">
        <img src="images/pic-8.png" alt="Team_image">
      </div>
      <h3>Alex Wood</h3>
      <p class="role">Support Lead</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
    </div>
  </div>
</div>
        
    <!--ENd of our team section -->


    <!--Get in touch section -->

    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://maps.google.com/maps?q=accra%20tema&t=k&z=13&ie=UTF8&iwloc=&output=embed"
                allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>Get in Touch</h3>
                <input type="text" placeholder="your name" class="box">
                <input type="email" placeholder="your email" class="box">
                <input type="tel" placeholder="subject" class="box">
                <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>

        </div>

    </section>

    <!--End of Get in touch section -->

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