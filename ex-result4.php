<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    $loggedin=true;
}
else
{
    $loggedin=false;
}?>


<!DOCTYPE html>
<html>
<head>
    <meta name= "viewport" content="width=device=width, initial-scale=1.0">
    <title> House Details</title>
    <link rel="stylesheet" href="ex-result.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar">
        <img src="Screenshot (29).png" class="mlogo" alt="logo">
        <div class="logo">Tenant Finder</div>
       
            <a href="#" class="toggle-btn" >
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="nav-items">
            <ul>
                        <li><a href="welcome.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                     <?php   if(!$loggedin)
                        {
                            echo '<li>
                            <a href="login.php">Login</a>
                            </li>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<li><a href="logout.php">Logout</a></li> '; 
                        }?>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
            </div>
    </nav>
    <div class="house-details">
        <div class="house-title">
            <h1>Surya Villa</h1>
            <div class="row">
               <div>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
                 <span>245 Reviews</span>
                </div>
                <div>
                   <p>Location: Adarsh Nagar, Jaipur, Rajasthan</p>
            </div>
         </div>
    </div>
    <div class="gallery">
        <div class="gallery-img-1"><img src="TFW-img\images\sr5.jpeg"></div>
        <div><img src="TFW-img\images\sr2.jpeg"></div>
        <div><img src="TFW-img\images\sr3.jpeg"></div>
        <div><img src="TFW-img\images\sr4.jpeg"></div>
        <div><img src="TFW-img\images\sr5.jpeg"></div>
    </div>
    <div class="small-details">
         <!-- <h2>Entire rental unit hosted by Brandon</h2> -->
         <p>For 2 &nbsp; &nbsp; 2 beds &nbsp; &nbsp; 1bathroom</p>
         <h4>&#x20b9 15,000/month</h4>
    </div>
    <hr class="line">
    <!-- <form action="check-form">
       <div>
          <label>check-in</label>
          <input type="text" placeholder="Add Date">
        </div>
        <div>
          <label>check-out</label>
          <input type="text" placeholder="Add Date">
        </div>
        <div class="guest-field">
          <label>Guest</label>
          <input type="text" placeholder="2 guest">
        </div>
        <button type="submit"Check availability></button>
    </form> -->
   
    <u1 class="details-list">
         <li><i class="fas fa-home"></i>Entire Home
            <span>You will have the entire flat for you.</span>
        </li>
        <li><i class="fas fa-paint-brush"></i>Enhanced clean
            <span>This host has committed to cleaning process.</span>
        </li>
        <li><i class="fas fa-map-marker-alt"></i>Great Location
            <span>90% of tenants gave the location a 5 star rating.</span>
        </li>
        <!-- <li><i class="fas fa-heart"></i>Great check-in Experience
            <span>100% of recent guests gave the check-in process a 5 str rating.</span>
        </li> -->
    </u1>
   
    <hr class="line">
   
    <p class="home-desc">A Luxury Residential Villa Development from the house of Prestige that has Villas designed, built and fitted out to blend perfectly with your lifestyle.</p>
    <hr class="line">
   
    <div class="map">
        <h3>Location on map</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.1628922052723!2d80.23907271407772!3d12.897245219996865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c6305662455%3A0x226bf9f4dc6219e3!2sPrestige%20Silver%20Springs!5e0!3m2!1sen!2sin!4v1649335837951!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <b>Jaipur, Rajasthan, India</b>
    <p>It's like a home away from home.</p>
    </div>
    </div>
   
    <!-- <div class="host">
         <img src="file:///D:/IWT%20LAB/host.png">
         <div>
             <h2>Hosted by Brandon</h2>
             <p><span>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </span>&nbsp; &nbsp; 245 reviews &nbsp; &nbsp; Response rate 100% &nbsp; &nbsp; Response time: 60 min</p>    
            </div>
        </div>
        <a href="#" class="contact-host">contact host</a>-->
    </div>
    <!---------------------------------------------  Footer Start Here--------------------------------------------->
    <footer class="footer">
                <div class="container2">
                    <div class="row">  
                        <div class="footer-col">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="aboutus.php">About Us</a></li>
                                <!--<li><a href="#">Our Services</a></li>-->
                                <li><a href="privacy.php">Privacy Policy</a></li>
                                <li><a href="termncond.php">Term and Condition</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Get help</h4>
                            <ul>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <li><a href="agreement.php">Agreement</a></li>
                             <!--   <li><a href="#">Payment Options</a></li> -->
                            </ul>
                        </div>
                        
                        <div class="footer-col">
                            <h4>Follow Us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    <hr>
                            <p>Copyright &#169; 2022, Tenant Finder Website</p> 
            
            </footer>
    <!---------------------------------------------  Footer Ends Here---------------------------------------------> 
                <script>
                   var navBar= document.getElementById("navBar");
                   function togglebtn(){
                      navBar.classList.toggle("hidemenu");
                     }
                </script>                    
               
               
       
       
   
</body>
</html>
