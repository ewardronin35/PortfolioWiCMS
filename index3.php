<?php
session_start();
require_once "user3/db.php";
$resumeId = 3;





?>

<!-- ... Your HTML code ... -->


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Personal Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/mains.css?ver=1.1.0" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Welcome To My Page</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Education</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    
    <?php 
                  $information_query = $dbcon->query("SELECT * FROM contact_information");
                  $contact_information = $information_query->fetch_assoc();
                ?>

                <!-- end contact information -->

                <!-- about me query start -->

                <?php 
                  $about_me_query = $dbcon->query("SELECT * FROM about_me");
                  $about_me = $about_me_query -> fetch_assoc();

                ?>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="Green">
    <div class="page-header-image" data-parallax="true" style="background-image: url('images/home/cg.jpg')"></div>
      <div class="container">
      <div class="content-center">
    <div class="cc-profile-image"><a href="#"><img src="user3/image/profile/<?=$about_me['photo']?>" alt=""></a></div>
    <div class="h2 title"><?=$about_me['name']?></div>
    <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$about_me['intro']?></p>
    <a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a>
    <a href="user3/resume/CV-Resume-v2.pdf" download="CV-Resume-v2.pdf" class="btn btn-primary smooth-scroll mr-2" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>



</div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="https://web.facebook.com/khalid.agrasada.5" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>      

<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?=$contact_information['address']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?=$contact_information['phone']?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?=$contact_information['email']?></p>
                    </div>
                </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <p><?=$about_me['details']?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">HTML</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div><span class="progress-value">65%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div><span class="progress-value">72%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Animation</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Design</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Bootstrap</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Photoshop</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 pitem">
                      <div class="speaker-box">
      								<div class="speaker-thumb">
      									<img src="user3/image/my_best_works/<?=$row['photo']?>" alt="img" >
      								</div>
      								<div class="speaker-overlay">
      									<span><?=$row['catagory']?></span>
      									<h4><a href="portfolio-single.html"><?=$row['works_name']?></a></h4>
      									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
      								</div>
      							</div>
                  </div>
                  <?php } ?>
                  <!-- foreach end -->
          

                </div>
        </div>
      
  

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

</div>
</div>
</section>
  </div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    <?php 
                            $education_query = $dbcon->query("SELECT * FROM education_informations");
                            foreach ($education_query as $education) {
                            ?>
  
                               <div class="education">
                                <div class="year"><?=$education['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <center><p class="category"></div><span><?=$education['degree_name']?></span> </p></center>
                                    <p class="category"><span><?=$education['degree_information']?></span> </p>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progressbar']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end foreach -->
                          <?php } ?>
</div>

</div>

<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('user3/image/staticmap.png')">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact Me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                  <form action="agrasada_message.php" method="post">
                    
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
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <ul>
                  <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$contact_information['address']?></li>
                  <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$contact_information['phone']?></li>
                  <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$contact_information['email']?></li>
                  </ul>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="h4 title text-center">If you have any concerns about me. Please contact me as soon as possible.</div>
      <div class="text-center text-muted">
        <p>Thank You</p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>