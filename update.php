<?php
include("db.php");
include("auth.php");


 if(isset($_REQUEST['submit']))
 	 
	 {
		 $us=$_SESSION["userid"];
	
$newphone = stripslashes($_REQUEST['newphone']);
 $newphone = mysqli_real_escape_string($con,$newphone);

$res = "UPDATE users
SET mobile='$newphone' 
WHERE userid='$us'";
$run=mysqli_query($con,$res);
        if($run)
		{ 
			header("Location: profile.php");
	 }
	 }
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
  background-image: url("images/update.jpg");

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
    
    <center><h2><font color="green">UPDATE YOUR DETAILS</font></h2></center>
<div class="bg-img">
 <form action="" method="post" name="login" class="container">

      <h2><font color="green">Enter your new phone number</font></h2>

 
    <label for="ph">New phone number</label>
    <input type="number" name="newphone" placeholder="new mobile number" required />
      
   .

  <button type="submit" name="submit" class="btn">UPDATE MOBILE NUMBER</button>
      
      
  </form>
</div>


</body>
</html>