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

<?php

    $customer_id = $_SESSION['customer_id']; 

    // Get This Customer Appoinments
    $appoinment_list = '';

    $query = "SELECT * FROM appoinment WHERE customer_id = {$customer_id} ;";
    $appoinments = mysqli_query($conn, $query);

    if ($appoinments)
    {
        while ($appoinment = mysqli_fetch_assoc($appoinments))
        {
            $appoinment_list .= "<tr>";
            $appoinment_list .= "<td> {$appoinment['first_name']} </td>";
            $appoinment_list .= "<td> {$appoinment['last_name']} </td>";
            $appoinment_list .= "<td> {$appoinment['mobile_no']} </td>";
            $appoinment_list .= "<td> {$appoinment['service_type']} </td>";
            $appoinment_list .= "<td> {$appoinment['date']} </td>";
            $appoinment_list .= "<td> {$appoinment['time']} </td>";
            $appoinment_list .= "<td> {$appoinment['city']} </td>";
            $appoinment_list .= "<td> {$appoinment['salon']} </td>";
            $appoinment_list .= "<td> <a style=\"color: red;text-decoration: none;\" href=\"cancel_appoinments.php?appoinment_id={$appoinment['appoinment_id']}\" onclick=\"return confirm('Do you want cancel this appoinment?');\"> Cancel </a></td>";
            $appoinment_list .= "</tr>";
        }
    }
    else
    {
        echo "Database query failed";
    } 


?>

<!DOCTYPE html>
<html>
    <head>

        <title> Manage My Booking - SalonBooking.lk </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Commissioner&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <!--CSS-->
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/my_booking.css">
        
        <!--JS-->
        <script type="text/javascript" src="../js/index.js"></script>

        <style>
            table {
            border-collapse: collapse;
            width: 80%;
            margin: 10px;
            }

            th, td {
            text-align: left;
            padding: 8px;
            }

            tr{background-color: #f2f2f2}

            th {
            background-color: #4CAF50;
            color: white;
            }

            button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px 20px 2px;
            cursor: pointer;
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
                        <a href="salons.php"> Salons </a>
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
                        <a href="salons.php"> <div class="border-bottom"> Salons </div></a> 
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
                    <p> Manage My Booking</p>
                </div>
                <!-- Page Title - End -->

            </div>

        </div>

        <!----- HEADER - END ----->

        <div class="section01" style="height: 0px; background-color: #f3eded;"></div>

















        <!--UPDATE BOOKING-->


        <div class="form_background">
 
            <div class="bg1">

                <div class="container1">

                    <div>
                        <h1 class="f1">My Booking Details</h1>

                        <table border="1" style="margin-left: auto; margin-right: auto;">
                            <tr>
                                <th> First Name </th>
                                <th> Last Name </th>
                                <th> Mobile No </th>
                                <th> Service Type </th>
                                <th> Date </th>
                                <th> Time </th>
                                <th> City </th>
                                <th> Salon </th>
                                <th> Delete </th>
                            </tr>

                            <?php echo $appoinment_list; ?>

                        </table>
 
                    </div>

                    <br><br>
      
                </div>

            </div>

        </div>


        <!--END UPDATE BOOKING-->

















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

