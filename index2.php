<?php
session_start();
require_once "user2/db.php";

$resumeId = 2;
$email = 'vincent@gmail.com';
$query = "SELECT resume_file FROM resumes WHERE email='$email'";
$result = $dbcon->query($query);
$row = $result->fetch_assoc();
$resumeFile = $row['resume_file'];
$resumeFilePath = 'user2/resume/' . $resumeFile;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b750fb4b9d.js" crossorigin="anonymous"></script>
    <title>My Personal Portfolio </title>
</head>
<body>
<?php 
                  $about_me_query = $dbcon->query("SELECT * FROM about_me");
                  $about_me = $about_me_query -> fetch_assoc();

                ?>
    <div id="header">
        <div class="container">
            <nav>
            <img src="images2/logo.png" class="logo">
            <ul>
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>  
                <li><a href="#contact">Contact</a></li> 
            </ul>
            </nav>
        </div>
        <div class="header-text">
        <div class="h2 title"><?=$about_me['name']?></div>
          <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$about_me['intro']?></p>
          <?php
// Assuming you have the resume ID from your database query
$id = 2;
?>
      <?php if ($resumeFile): ?>
            <a href="<?= $resumeFilePath ?>" class="btn btn-primary" download="<?= $resumeFile ?>">Download Resume</a>
        <?php endif; ?>
          <a class="btn btn-primary" href="#services" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">My Skills</a>

        </div>
    </div>
    <!---------------------------------------ABOUT------------------------------------------->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                <img src="user2/image/profile/<?=$about_me['photo']?>" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p><?=$about_me['details']?></p>
                       <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                       </div>
                       <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI/UX</span><br>Designing Web/App Interface</li>
                            <li><span>Web Development</span><br>Web app Development</li>
                        </ul>
                       </div>
                       <div class="tab-contents" id="education">
                       <?php 
                            $education_query = $dbcon->query("SELECT * FROM education_informations");
                            foreach ($education_query as $education) {
                            ?>





                            <div class="education">
                                <div class="year"><?=$education['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$education['degree_name']?></span>
                                    <span><?=$education['degree_information']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progressbar']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end foreach -->
                          <?php } ?>
                            <!-- End Education Item -->
                            
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
    <!---------portfolio---------->
    <div id="portfolio">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">

            <!-- php code for my best works -->
                    <?php
                      $my_best_works_query = $dbcon->query("SELECT * FROM my_best_works ORDER BY id DESC LIMIT 6");
                      foreach($my_best_works_query as $row){
                    ?>

                      <div class="col-lg-4 col-md-6 pitem">
                      <div class="speaker-box">
                      <div class="speaker-overlay">
      									<h1><center><span><?=$row['catagory']?></span></center></h1>
      								</div>
      								<div class="speaker-thumb">
      									<img src="user2/image/my_best_works/<?=$row['photo']?>" alt="img" >
      								</div>
      								
      							</div>
                  </div>

                  <!-- foreach end -->
                <?php } ?>

                </div>
    </div>
    <script>

        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
        <?php

$services_query = $dbcon->query("SELECT * FROM services ORDER BY id DESC LIMIT 6");

?>
    <div id="services">
        <div class="container">
            <h1 class="sub-title"> My Skills</h1>

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
        </div>

    </div>

  </div>
  </div>
    <!---------contact---------->
    <?php 
                  $information_query = $dbcon->query("SELECT * FROM contact_information");
                  $contact_information = $information_query->fetch_assoc();
                ?>

                <!-- end contact information -->

                <!-- about me query start -->

               
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
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
                    <div class="social-icons">
                    <a href="<?=$about_me['fb_link']?>"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?=$about_me['twitter_link']?>"><i class="fab fa-twitter"></i></a>
                    <a href="<?=$about_me['github_link']?>"><i class="fab fa-github"></i></a>
                    <a href="<?=$about_me['linkedin_link']?>"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="contact-right">
                <form action="vincent_message.php" method="post">
                <?php if(isset($_SESSION['guest_message_error'])) { ?>
                                    <div class="alert alert-danger">
                                      <?=$_SESSION['guest_message_error']?>
                                    </div>
                                  <?php }
                                  // unset error message

                                  unset($_SESSION['guest_message_error']);
                                  ?>
                                     <?php if(isset($_SESSION['message_send'])) { ?>
                                    <div class="alert alert-success">
                                      <?=$_SESSION['message_send']?>
                                    </div>
                                  <?php }
                                  // unset success message

                                  unset($_SESSION['message_send']);
                                  ?>
                                    <input type="text" placeholder="your name *" name='guest_name'>
                                    <input type="email" placeholder="your email *" name='guest_email'>
                                    <textarea name="guest_message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</body>
</html>