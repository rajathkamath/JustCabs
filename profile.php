<?php
include("auth.php");
include("db.php");
?>


<?php
 
{	$us=$_SESSION['userid'];
	

$qu="SELECT * from users where userid='$us'";
$run=mysqli_query($con,$qu);
$row=mysqli_fetch_array($run);

}

 if(isset($_REQUEST['submit']))
 	 
	 {
		 $us=$_SESSION["userid"];
	


$res = "DELETE FROM users
WHERE userid='$us'";
$run1=mysqli_query($con,$res);
        if($run1)
		{ 
			header("Location: login.php");
	 }
	 }


?>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
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
   <form action="" method="post" name="login" >

<center><h1><font color="green">Your JUST CABS profile</font></h1></center>
<center><img src="images/profile.jpg" alt="Girl in a jacket" style="width:300px;height:300px;"></center>
 <p><center> <font color="green">Your account name:</font><?php echo $row['name']; ?></center></p>
 <p><center><font color="green">Your userid:</font><?php echo $_SESSION['userid']; ?></center></p>
 <p><center> <font color="green">Your mobile number:</font><?php echo $row['mobile']; ?></center></p>


   
  
    </div>
	<center><a href="index.php" class="button">Return HOME</a>
	<p><a href="update.php" class="button">UPDATE yor phone number</a>

<button type="submit" name="submit" class="button">DELETE your account</button>
    </form>
     

</body>
</html>
