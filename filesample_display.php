<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ARUL ANANDAR COLLEGE | DEPARTMENT OF CS & APPLICATIONS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="images/cs_logo2.png">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>

   <body oncontextmenu="return false">
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                   <img src="images/cs_logo2.png"><br>
                   <strong>AAC-CS</strong>
                 

                  
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
       
       <!-- Header Start -->
      <div class="header-area header-sticky">
           <div class="main-header ">
               <div class="container">
                   <div class="row align-items-center">
                       <!-- logo -->
                       <div class="col-xl-2 col-lg-2">
                           <div class="logo">
                              <a href="index.html"><img src="images/aac_cs_logo2.jpg" type="responsive" alt="" width="100%" height="100%"></a>
                           </div>
                       </div>
                   <div class="col-xl-10 col-lg-8">
                           <!-- main-menu -->
                           <div class="main-menu f-right d-none d-lg-block">
                               <nav>
                                   <ul id="navigation">                                                                                                                                     
                                       <li><a href="index.html">Home</a></li>
                                       <li><a href="about.html">About</a></li>
                                       <li><a href="staffs.html">Staff</a></li>
                                       <li><a href="achievements.html">Achievements</a>
                                           <!--
                                           <ul class="submenu">
                                               <li><a href="blog.html">Blog</a></li>
                                               <li><a href="single-blog.html">Blog Details</a></li>
                                           </ul>
                                           -->
                                       </li>
                                       <li><a href="activities.html">Activities</a>
                                           <!--
                                           <ul class="submenu">
                                               <li><a href="rooms.html">Rooms</a>
                                               <li><a href="elements.html">Element</a></li>
                                           </ul>
                                           -->
                                       </li>
                                       <li><a href="celebrations.html">Celebrations</a></li>
<li><a href="credits.html">Credits</a></li>
 <li><a href="magazine_display.php">Magazine</a></li>
                                       <li><a href="contact.html">Contact us</a></li>
                                   </ul>
                               </nav>
                           </div>
                       </div>     
                       <!--        
                       <div class="col-xl-2 col-lg-2">
                            header-btn 
                           <div class="header-btn">
                               <a href="#" class="btn btn1 d-none d-lg-block ">Join Now</a>
                           </div>
                       </div>
                   -->
                       <!-- Mobile Menu -->
                       <div class="col-12">
                           <div class="mobile_menu d-block d-lg-none"></div>
                       </div>
                   </div>
               </div>
           </div>
      </div>
       <!-- Header End -->
   </header>
 <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="images/magazine_banner.jpg" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>Updates</span>
                            <h2>Magazine</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

<main>
<?php
$conn=new mysqli('localhost','id15052390_wethesmartcoders','DannyLeninGoodwin123*','id15052390_department');
if($conn->connect_errno)
{
echo $conn->connect_error;
die();
}
else
{
//echo "DB Connected";
}
?>
 <!--Magazine Start-->
 <section class="blog_area section-padding">
            <div class="container">
                
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <!--font-back-tittle  -->
                            <div class="font-back-tittle mb-45">
                                <div class="archivment-front">
                                    <h3>Magazine</h3>
                                </div>
                                <h3 class="archivment-back">Magazine</h3>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                   
                                    <?php
$sql1="SELECT * FROM magazine";
if($result=$conn->query($sql1))
{

if($result->num_rows)
{
while($row=$result->fetch_object())
{

    ?>
    <center>
    <h3>heading:<b> <?php echo $row->heading; ?></b></h3><br>
    </center>
    <div style="padding:20px">
          <embed type="application/pdf" src="files/<?php echo $row->file; ?>" style="width:100%; height:100%"></embed>
     </div>
                                    <a href="#" class="blog_item_date">
                                        <h3>

<?php



    echo "$row->date";
   ?>
   </h3>
   </a>
                                </div>
    
                                <div class="blog_details">
                                    <a href="#">
                                        <h2><font color="red">* </font>
    <?php
    echo "$row->content";
}
}
}
?>

                                       
                                       
                                  <font color="red"> *</font></h2>
                                    </a>
                                    
                                    <ul class="blog-info-link">
                                       <li>Updates | Magazine</li>
                                      
                                    </ul>
                                </div>
                            </article>
    
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>    
     
        <!-- Magazine End-->
        <!--thought for the week Start-->
 <section class="blog_area section-padding">
            <div class="container">
                
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <!--font-back-tittle  -->
                            <div class="font-back-tittle mb-45">
                                <div class="archivment-front">
                                    <h3>Thought for the week</h3>
                                </div>
                                <h3 class="archivment-back">Thought for the week</h3>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                   
                                    <?php
$sql2="SELECT * FROM thoughts";
if($result=$conn->query($sql2))
{

if($result->num_rows)
{
while($row=$result->fetch_object())
{

    ?>
 <img class="card-img rounded-0" src="images/<?php echo $row->image; ?>" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>

<?php



    echo "$row->date";
   ?>
   </h3>
   </a>
                                </div>
    
                                <div class="blog_details">
                                    <a href="#">
                                        <h2><marquee><font color="red">* </font>
    <?php
    echo "$row->content";
}
}
}
?>

                                       
                                       
                                  <font color="red"> *</font></marquee></h2>
                                    </a>
                                    
                                    <ul class="blog-info-link">
                                       <li>Updates | Thought for the Week</li>
                                      
                                    </ul>
                                </div>
                            </article>
    
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>    
     
        <!-- thought for the week End-->
 
     <!--announcements-->
     <section class="blog_area section-padding">
            <div class="container">
                
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <!--font-back-tittle  -->
                            <div class="font-back-tittle mb-45">
                                <div class="archivment-front">
                                    <h3>Announcements</h3>
                                </div>
                                <h3 class="archivment-back">Announcements</h3>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <!--
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="images/sundar_pitchai.jpg" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
    -->
                                <div class="blog_details">
                                    <a href="#">
<h2><marquee><font color="red">* </font>

<?php
$sql="SELECT * FROM announcements";
if($result=$conn->query($sql))
{

if($result->num_rows)
{
while($row=$result->fetch_object())
{
    echo "$row->announcements";
    //echo " | ";
    ?>
    <font color="red"> *</font></marquee></h2>
     <a href="#" class="blog_item_date">
                                        <h3>
                                            <?php
    echo "$row->date";
    ?>
    </h3>
    <?php
}
}
}
?>


                                    </a>
                                    
                                    <ul class="blog-info-link">
                                       <li>Announcements | to students</li>
                                      
                                    </ul>
                                </div>
                            </article>
    
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>    
     
        <!-- announcements-->

</main>

<footer>
       <!-- Footer Start-->
       <div class="footer-area black-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-30">
                         <!-- logo -->
                         <div class="footer-logo">
                            <a href="index.html"><img src="images/aac_logo.png" alt="" width="40%" height="40%"></a>
                         <a href="index.html"><img src="images/cs_logo2.png" alt="" width="40%" height="40%"></a>
                        
                         </div>
                         <div class="footer-social footer-social2">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-skype"></i></a>
                             <a href="#"><i class="fab fa-instagram"></i></a>
                         </div>
                         <div class="footer-pera">
                              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | ARUL ANANDAR COLLEGE | DEPARTMENT OF COMPUTER SCIENCE AND APPLICATIONS 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="about.html">About</a></li>
                                   <li><a href="staffs.html">Staff</a></li>
                                   <li><a href="achievements.html">Achievements</a></li>
                                   <li><a href="activities.html">Activities</a></li>
                                   <li><a href="celebrations.html">Celebrations</a></li>
                                    <li><a href="credits.html">Credits</a></li>
                                     <li><a href="magazine_display.php">Magazine</a></li>
                                   <li><a href="contact.html">Contact us</a></li>

                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Developed by</h4>
                               <ul>
                                   <li>2018-2021 Student Batch | Department of Computer Science & Applications | ARUL ANANDAR COLLEGE</li>
                                   <!--
                                   <li><a href="#">Skype: Marianabooking</a></li>
                                   <li><a href="#">reservations@hotelriver.com</a></li>
                                   -->
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Contact us</h4>
                               <ul>
                                   <li>ARUL ANANDAR COLLEGE,</li>
                                   <li>Karumathur - 625 514,</li>
                                       <li>Madurai Dt.</li>
                                       <li>Tel.: 04549-287221</li>
                                  <li>aac.csa.mdu@gmail.com </li>
                               </ul>
                               <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="#"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                              <button type="submit" name="submit" id="newsletter-submit"
                                              class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>