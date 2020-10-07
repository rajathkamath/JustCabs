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
  background-image: url("images/userdetails.jpg");

  min-height: 680px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
        
a {
  color: green;
  text-decoration:blink;
}

a:hover
{
	color:blue;
}
    </style>
</head>
<body bgcolor="#FBFBFD">

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['sub'])){
        // removes backslashes
 $userid = stripslashes($_REQUEST['userid']);
     
 $userid = mysqli_real_escape_string($con,$userid); 
 $mobile = stripslashes($_REQUEST['mobile']);
 $mobile = mysqli_real_escape_string($con,$mobile);
  $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "UPDATE users
SET password = $password
WHERE userid=$userid";
        $result = mysqli_query($con,$query);
        if($result){
            "<div class='form'>
			<br/><br/>
<center><h2>You are registered successfully.</h2></center>
<center><br/>Click here to <a href='login.php'>Login</a></div></center>";
        }
		else{
		echo "<div class='form'>
		<br/><br/>
<center><h2>Invalid credentials.<br/>
give valid userid/mobile no.</h2></center>
<center><br/>Click here to <a href='forpass.php'>reset again</a></div></center>";
	}
    }
	else{
?>

    <div class="topnav">
    <a href="rental.php">Rental</a>
    <a href="outstation.php">Outstation</a>
    <a href="citytaxi.php">City Ride</a>
  <a class="active" href="index.php">Home</a>
</div>
    
    <center><h2><font color="green">Reset password</font></h2></center>
<div class="bg-img">
  <form name="registration" action="" method="post" class="container">
    <h1>Verify your credentials</h1>
      <h2><font color="green">Reset:</font></h2>

    <label for="name">Enter your user-id</label>
    <input type="text" name="userid" placeholder="Userid" required />
      
      <label for="mobile">Enter your phone number</label>
    <input type="number" id="pno" name="mobile" placeholder="Your phone number" required />   
      
      <label for="password">Enter new password</label>
    <input type="password" name="password" placeholder="Password" required />

    <button type="submit" class="btn"  name="sub" value="justcabs" />Reset</button>
      
      
  </form>
</div>
    
<?php } ?>
</body>
</html>