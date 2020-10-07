<?php
include("db.php");
include("auth.php");


?>




<!DOCTYPE html>
<html>
<head>
<a href="index.php">  <img src="images/logo2.jpg"  alt="Smiley face" width="250" height="50" align="left"></a>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="css/style2.css" type="text/css">
    <style>
    .bg-img {
  /* The image used */
  background-image: url("images/rentals.jpg");

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
    
    <center><h2><font color="green">RENTAL CABS</font></h2></center>
<div class="bg-img">
  <form action="billrent.php" class="container" method="POST">
    <h1>Book a Rental cab</h1>

    <label for="pickup"><b>PickUP</b></label>
   <select name="pickup" required />  

    <option value="">Pickup location.</option>
   <?php 
   $que="select * from place";
   $run = mysqli_query($con,$que);
   while($row=mysqli_fetch_array($run))
   {
	   ?>
  <option value=" <?php  echo $row['pvalue'];?>"><?php  echo $row['pname'];?></option>
   <?php } ?>
    </select>
    <label for="choose"><b>Duration of ride</b></label>
    <select name="duration">
        <option label="1 Hours" value="1"></option>
        <option label="2 Hours"value="2"></option>
        <option label="3 Hours"value="3"></option>
        <option label="4 Hours" value="4"></option>
        <option label="5 Hours" value="5"></option>
        <option label="6 Hours" value="6"></option>
        <option label="7 Hours" value="7"></option>
        <option label="8 Hours" value="8"></option>
        <option label="9 Hours" value="9"></option>
        <option label="10 Hours" value="10"></option>
        <option label="11 Hours" value="11"></option>
        <option label="12 Hours" value="12"></option>
      </select>
<label for="choose"><b>Select the type of CAB</b></label>
<select name="cartype">
    <option value="">Car type</option>
   <?php 
   $que1="select * from cartype";
   $run1 = mysqli_query($con,$que1);
   while($row1=mysqli_fetch_array($run1))
   {
	   ?>
  <option value=" <?php  echo $row1['cvalue'];?>"><?php  echo $row1['ctype'];?></option>
   <?php } ?>
    </select>
      


    <button type="submit" name="submit" class="btn">Book now</button>
  </form>
</div>
  
</body>
</html>