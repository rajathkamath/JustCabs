<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
    <a href="index.php">  <img src="images/logo2.jpg"  alt="Smiley face" width="250" height="50" align="left"></a>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <link rel="stylesheet" href="css/stylecard.css" type="text/css">
    <link rel="stylesheet" href="css/styleslide.css" type="text/css">
    <style>
    .bg-img {
  /* The image used */
  background-image: url("images/bgout.jpg");

  min-height: 565px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    </style>
    
</head>
<body bgcolor="#FBFBFD">

<div class="topnav">
    <a href="rental.php">Rental</a>
    <a href="outstation.php">Outstation</a>
    <a href="citytaxi.php">City Ride</a>
  <a class="active" href="index.php">Home</a>
  <p align="right"> Welcome <?php echo $_SESSION['userid']; ?>    .</p>
  <a class="active" href="logout.php">Logout</a>
   <a class="active" href="profile.php">Profile</a>
</div>
  
<center><h1><font color="green">we are JUST CABS</font></h1></center>
    <div class="bg-img">
  
    </div>
    
     <center><h2><font color="green">our features</font></h2></center>
    
    <div class="topnav">
   <center> <img src="images/ac.jpg" style="width:30%">
    <img src="images/one.jpg" style="width:30%">
    <img src="images/hour.jpg" style="width:30%"></center>

  
</div>
    
        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/microslide.jpg" style="width:100%">
  <div class="text">Just-Micro</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/minislide.jpg" style="width:100%">
  <div class="text">Just-Mini</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/sedanslide.jpg" style="width:100%">
  <div class="text">Just-Sedan</div>
</div>
        
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/suvslide.jpg" style="width:100%">
  <div class="text">Just-SUV</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
   <p></p>
    <center>
    <div class="row">
  <div class="column">
      <a href="citytaxi.php"><img src="images/city.jpg" alt="Snow" style="width:100%"></a>
      <h2><b><font color="green">City taxi</font></b></h2>
      <h5>The perfect way to get through your everyday travel needs. City taxis are available 24/7 and you can book and travel in an instant. With rides starting from as low as Rs. 6/km, you can choose from a wide range of options! You can also opt to do your bit for the environment with just Share!</h5>
  </div>
  <div class="column">
      <a href="outstation.php"> <img src="images/outsta.jpg" alt="Forest" style="width:100%"></a>
      <h2><b><center><font color="green">Outstation</font></center></b></h2>  
       <h5>Ride out of town at affordable one-way and round-trip fares with Just cab’s intercity travel service. Choose from a range of AC cabs driven by top partners, available in 1 hour or book upto 7 days in advance. We have you covered across India with presence in 90+ cities with over 500 one way routes.</h5>
        </div>
  <div class="column">
      <a href="rental.php"> <img src="images/rent.jpg" alt="Mountains" style="width:100%"></a>
      <h2><b><center><font color="green">Rentals</font></center></b></h2>
       <h5>With Just-Rentals you get a cab at your disposal. So be it a  day long business meeting, a shopping trip with your friends or just a day out in a new city, we have you covered. Packages start at 1 hour and can be extended upto 12 hours!</h5>
        </div>
     
        </div></center>
    


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    

</body>
</html>
