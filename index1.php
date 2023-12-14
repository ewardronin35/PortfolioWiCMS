<?php
session_start();
require_once "user4/db.php";
$information_query = $dbcon->query("SELECT * FROM contact_information");
$contact_information = $information_query->fetch_assoc();
$about_me_query = $dbcon->query("SELECT * FROM about_me");
$about_me = $about_me_query -> fetch_assoc();
$resumeId = 4;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Portfolio</title>
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/styles2.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1><?=$about_me['name']?></h1>
      <h2><?=$about_me['intro']?></h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>About Me</span>
          <h2>About Me</h2>
        </div>

        <div class="row">
          <div class="image col-lg-4" ><img src="user4/image/profile/<?=$about_me['photo']?>" alt=""></a></div>
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content ps-lg-4 d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-9">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span><?=$about_me['name']?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?=$contact_information['email']?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?=$contact_information['phone']?></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?=$contact_information['address']?></span></li>
                  </ul>
                </div>
               
              </div>
             

            <div class="skills-content ps-lg-4">
              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Me Section -->

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>My Resume</span>
          <h2>My Resume</h2>
          <a href="user4/resume/resume1.pdf" download="resume1.pdf" class="btn btn-primary smooth-scroll mr-2" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>

        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4><?=$about_me['name']?></h4>
              <p><em><?=$about_me['intro']?></em></p>
              
            </div>
                          <?php 
                            $education_query = $dbcon->query("SELECT * FROM education_informations");
                            foreach ($education_query as $education) {
                            ?>
            <h3 class="resume-title">Education</h3>
            <div class="resume-item pb-0">
              <h4><?=$education['degree_name']?></h4>
              <h5><?=$education['degree_information']?></h5>
              <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progressbar']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
  
          </div>
          <?php } ?>

      </div>
    </section>
    <!-- End My Resume Section -->

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
    <div class="section" id="experience">
  <div class="container cc-experience">
  <?php

$services_query = $dbcon->query("SELECT * FROM services ORDER BY id DESC LIMIT 6");

?>

<section id="service" class="services-area pt-120 pb-50">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>What I do</span>
                    <h2>Services</h2>
                </div>
            </div>
        </div>
<div class="row">

  <!-- foreach code -->

  <?php
   foreach ($services_query as $service) {
    
  ?>

<div class="col-lg-4 col-md-6">
  <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                    <i class="<?=$service['icon']?>"></i>
    <h3><?=$service['title']?></h3>
    <p><?=$service['some_text']?></p>
  </div>
</div>

<!-- foreach end -->
<?php } ?>
<!-- End My Services Section -->
    
    <!-- ======= My Portfolio Section ======= -->
    <?php
                      $my_best_works_query = $dbcon->query("SELECT * FROM my_best_works ORDER BY id DESC LIMIT 6");
                      foreach($my_best_works_query as $row){
                    ?>
<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 pitem">
                      <div class="speaker-box">
      								<div class="speaker-thumb">
      									<img src="user4/image/my_best_works/<?=$row['photo']?>" alt="img" >
      								</div>
      								<div class="speaker-overlay">
      									<span><?=$row['catagory']?></span>
      									<h4><a href="portfolio-single.html"><?=$row['works_name']?></a></h4>
      								</div>
      							</div>
                  </div>
                  <?php } ?>
                  <!-- foreach end -->
          

                </div>
        </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact Me</span>
          <h2>Contact Me</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Me</h3>
                  <p><?=$contact_information['email']?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Me</h3>
                  <p><?=$contact_information['phone']?></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <form action="derwin_message.php" method="post">
                    
                    <?php if(isset($_SESSION['guest_message_error'])) { ?>
                                      <div class="alert alert-danger">
                                        <?=$_SESSION['guest_message_error']?>
                                      </div>
                                    <?php }
                                    // unset error message
  
                                    unset($_SESSION['guest_message_error']);
                                    ?>
                                    <!-- error end -->
  
                                    <!-- message send success -->
  
                                    <?php if(isset($_SESSION['message_send'])) { ?>
                                      <div class="alert alert-success">
                                        <?=$_SESSION['message_send']?>
                                      </div>
                                    <?php }
                                    // unset success message
  
                                    unset($_SESSION['message_send']);
                                    ?>
                        <div class="p pb-3"><strong>Please feel free to contact me.</strong></div>
                        <div class="row mb-3">
                          <div class="col">
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input type="text" placeholder="your name *" name='guest_name'>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col">
                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" placeholder="your email *" name='guest_email'>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col">
                            <div class="form-group">
                            <textarea name="guest_message" id="message" placeholder="your message *"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                          <button class="btn">SEND</button>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Laura Thomson</h3>
      <div class="social-links">
        <a href="<?=$about_me['twitter_link']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?=$about_me['fb_link']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?=$about_me['github_link']?>"class="github"><i class="bx bxl-github"></i></a>
        <a href="<?=$about_me['github_link']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Laura</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>