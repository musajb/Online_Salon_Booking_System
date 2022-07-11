<?php session_start(); ?>
<?php require 'config.php'; ?>

<?php

        if (isset($_SESSION['customer_user_type']) == 1)
        {
            $signup_button = 'My Account';
            $signup_button_link = 'manage_account.php';
            $signin_button = 'Log Out';
            $button_width = 'width: 160px;';
        }
        else if (isset($_SESSION['admin_user_type']) == 2)
        {
            $signup_button = 'Manage System';
            $signup_button_link = 'manage_system.php';
            $signin_button = 'Log Out';
            $signin_button_link = 'logout.php';
            $button_width = 'width: 150px;';
        }
?>

<!DOCTYPE html>
<html>
    <head>

        <title> Salons - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/salons.css">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <script type="text/javascript" src="../js/index.js"></script>

        <style>
              .button-offers {
                background-color: #d19f68;
                color: black;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 60%;
              }

              .button-offers:hover {
                opacity: 0.8;
              }
        </style>

    </head>

    <body>
        
        <!----- HEADER - START ----->

        <div class="cover-page-bg-img">

            <div class="cover-page-bg-img-div">

                <!-- Navigation Bar Slide Down On Scroll - Start -->
                <div id="navbar">
                    <p style="float: left; color: #1d2434;"><b> SalonBooking.lk </b></p>
                    
                    <div class="nav-right" style="float: right;">
                        <a href="home.php">Home</a>
                        <a href="make_booking.php"> Make Booking </a>
                        <a href="services.php"> Services </a>
                        <a class="active" href="salons.php"> Salons </a>
                        <a href="products.php"> Products </a>
                        <a href="contact_us.php"> Contact Us </a>
                        <button onclick="document.location='<?php echo $signup_button_link; ?>'" style="margin-left: 40px; <?php echo $button_width; ?>"> <?php echo $signup_button; ?> </button>
                        <button onclick="document.location='logout.php'" style="margin-left: 20px;"> <?php echo $signin_button; ?> </button>
                    </div>
                </div>  
                <!-- Navigation Bar Slide Down On Scroll - End -->

                <!-- Top Logo - Start -->
                <div class="header-logo">
                    <p><b> SalonBooking<span>.</span>lk </b></p>
                </div>
                <!-- Top Logo - End -->

                <!-- Top Navigation Bar - Start -->
                <div class="section-topnav">
                    <div class="topnav">
                        <a href="home.php" class="active-a"> <div class="border-bottom" id="active-div"> Home </div></a> 
                        <a href="make_booking.php"> <div class="border-bottom"> Make Booking </div></a> 
                        <a href="services.php"> <div class="border-bottom"> Services </div></a> 
                        <a href="salons.php"> <div lass=".phpborder-bottom"> Salons </div></a> 
                        <a href="products.php"> <div class="border-bottom"> Products </div></a>
                        <a href="contact_us.php"> <div class="border-bottom"> Contact Us </div></a>
                        <button onclick="document.location='<?php echo $signup_button_link; ?>'" style="margin-left: 40px; <?php echo $button_width; ?>"> <?php echo $signup_button; ?> </button>
                        <button onclick="document.location='logout.php'" style="margin-left: 40px;"> <?php echo $signin_button; ?> </button>
                    </div>
                </div>
                <!-- Top Navigation Bar - End -->

                <!-- Horizontal Line - Start -->
                <hr style="width: 100%; border-color: #775a3a;">
                <br>
                <!-- Horizontal Line - End -->

                <!-- Page Title - Start -->
                <div class="page-title">
                    <p> Salons </p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->
            
           
              
             
              <section class="intro">
                <div class="column">
                  <h3>Salon Booker</h3>
                  <img src="../images/cover_img01.jpg" alt="cover" class="profile"> </div>
                <div class="column">
                  
                    <p>We have launched this online reservation system in 2020 to help people with their busy lifestyle. </p>
                  <p>This method will help you to get an appointment at the beauty salon.With salons all over Sri Lanka,you can get a salon appointment in any area.</p>
                </div>
              </section>
              <hr>
              <div class="col-lg-4 col-12">
                <div class="row mx-0">
                  <div class="col-12 card bg-light mx-auto">
                    <h3 class="text-center card-header">Find Your Salon</h3>
                    <form class="card-body">
                      <div class="form-group row">
                        <label for="location1" class="col-form-label">Location</label>
                        <select class="form-control" name="location" id="location1">
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="pricefrom" class="col-form-label">Salon Name</label>
                        <div class="input-group">
                         
                          <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1">
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label for="priceto" class="col-form-label">Requirment</label>
                        <div class="input-group">
                          
                          <input type="text" class="form-control" id="priceto" aria-describedby="basic-addon2">
                        </div>
                      </div>
                      <p class="text-center"><a href="#" class="btn btn-danger" role="button">Search </a></p>
                    </form>
                  </div>
                  <div class="col-12">
                    
                    <hr>

                  <center> <button class="button-offers" type="button" onclick="document.location='salon_offers.php'"> New Offers </button> </center>

           <br> <div class="gallery">
            <div class="thumbnail"> <a href="#"><img src="../images/s01.jpg" alt="salon" width="2000" class="cards"/></a>
              <br>
              <h4>Salon Nisha</h4>
              <p class="tag">No:40/7, Kandy Road , Colombo</p>
              <p class="text_column">011245367</p>
              <p>Women,Kids Salon in the Colombo area..</p>
              
          
            </div>
            <div class="thumbnail"> <a href="#"><img src="../images/s03.jpg" alt="salon" width="2000" class="cards"/></a>
              <h4>Salon Ish</h4>
              <p class="tag">No:32/1, Pitipana, Homagama</p>
              <p class="text_column">0112657893</p>
              <p>Beautifying and grooming.</p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="../images/s02.jpg" alt="salon" width="2000" class="cards"/></a>
              <h4>Salon Ayu</h4>
              <p class="tag">No:69/5, negambo</p>
              <p class="text_column">011256890</p>
              <p>We have many ayuwerdic threatments</p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="../images/s07.jpg" alt="salon" width="2000" class="cards"/></a>
              <h4>Salon Esh</h4>
              <p class="tag">No:44, 2nd street,Gampaha</p>
              <p class="text_column">0729654765</p>
              <p>Mens only salon.</p>
            </div>
          </div>
          <div class="gallery">
            <div class="thumbnail"> <a href="#"><img src="../images/s05.jpg" alt="salon" width="2000" class="cards"/></a>
              <h4>Salon Manali</h4>
              <p class="tag">Pannipitiya Road, Kottawa</p>
              <p class="text_column">076543890</p> 
              <p>Special offer for Grooming.</p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="../images/s06.jpg" alt="salon" width="2000" class="cards"/></a>
              <h4>Salon Beauty</h4>
              <p class="tag">Kandy Road, Kurunagala</p>
              <p class="text_column">027134567</p>
              <p>For the beutiful skin come join us</p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="../images/s04.jpg" alt="salon" width="2000" class="cards"/></a>
              <h4>Salon ABD</h4>
              <p class="tag">Kaburupitiya,Matara</p>
              <p class="text_column">071356789</p>
              <p>Clean and fresh styles.</style></p>
            </div>
            <div class="thumbnail"> <a href="#"><img src="../images/s08.jpg" alt="salon" width="2000" class="cards"/></a>
              <h4>Salon Ama</h4>
              <p class="tag">Kollupitiya Road, Colombo</p>
              <p class="text_column">0113456786</p>
              <p>For your Beauty</p>
            </div>
          </div>
         <br>
         
             
          
            
           
        <!----- FOOTER - START ----->

        <div class="section-footer" style="height: 400px;">
          <div class="section-footer-bg">

              <div class="footer-div" style="margin: 0 auto; max-width: 1300px;"> 
         
                  <div class="footer-row">
  
                      <div class="footer-column" style="margin: 10px 10px 10px 22px;">
                          <p class="footer-column-logo"> SalonBooking.lk </p>
                          <p class="footer-column-note"> Find the best Salons in your area. Simply search and make a beauty appointment online quickly at the salon of your choice. </p>
                          <p class="footer-column-email"> salonbookinglk@gmail.com </p>
                      </div>
  
                      <div class="footer-column" style="margin: 10px;">   
                          <p class="footer-column-topic01"> Quick Navigation </p>
                          <div class="footer-column-nav">
                              <p> <a href="home.php"> Home </a> </p>
                              <p> <a href="make_booking.php"> Make Booking </a> </p>
                              <p> <a href="services.php"> Services </a> </p>
                              <p> <a href="salons.php"> Salons </a> </p>
                              <p> <a href="products.php"> Products </a> </p>
                          </div>
                      </div>
  
                      <div class="footer-column" style="margin: 10px;"> 
                          <p class="footer-column-topic02"> Explore </p> 
                          <div class="footer-column-explore">
                              <p> <a href="about_us.php"> About Us </a> </p>
                              <p> <a href="contact_us.php"> Contact Us </a> </p>
                              <p> <a href="feedback.php"> Feedback </a> </p>
                              <p> <a href="#privacy_policy"> Prtvacy Policy </a> </p>
                              <p> <a href="#terms&conditions"> Terms and Conditions </a> </p>
                          </div>
                      </div>
  
                      <div class="footer-column" style="margin: 10px;"> 
                          <p class="footer-column-topic03"> Follow Us </p>
                          <div class="footer-column-social-media"> 
                              <div class="footer-column-social-media-div">  <p> <a href="https://www.facebook.com/" target="blank"> <img src="../images/facebook-b.png"> </a> </p> </div> 
                              <div class="footer-column-social-media-div">  <p> <a href="https://www.instagram.com/accounts/login/" target="blank"> <img src="../images/instagram-b.png"> </a> </p> </div> 
                              <div class="footer-column-social-media-div">  <p> <a href="https://twitter.com/login?lang=en" target="blank"> <img src="../images/twitter-b.png"> </a> </p> </div> 
                              <div class="footer-column-social-media-div">  <p> <a href="https://www.linkedin.com/login" target="blank"> <img src="../images/linkedin-b.png"> </a> </p> </div> 
                          </div>
                          <br>
                          <p class="footer-column-topic03-yt"> Subscribe </p>
                          <div class="footer-column-social-media-div-yt">  <p> <a href="https://www.youtube.com/" target="blank"> <img src="../images/youtube-b.png"> </a> </p> </div>
                      </div>
  
                  </div>    
              </div>

          </div>

      </div>

      <!----- FOOTER - END ----->

  </body>
</html>
