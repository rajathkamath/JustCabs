<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
   <a href="index.php">  <center><img src="images/logo2.jpg"  alt="Smiley face" width="250" height="50" align="left"></a></center>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css" type="text/css">
     <link rel="stylesheet" href="css/style2.css" type="text/css">
    <style>
    .bg-img {
  /* The image used */
  background-image: url("images/back-outstation.jpg");

  min-height: 550px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
        
a {
  color: green;
}
    </style>
</head>
	<title>
 admin
 </title>
<body bgcolor="#FBFBFD">


    <div class="topnav">
    <a href="adminuser.php">USER details</a>
    <a href="admindriver.php">Driver details</a>
    <a href="adminvehicle.php">Vehicle details</a>
  <a class="active" href="admin.php">Home</a>
  <p align="right"> Welcome <?php echo $_SESSION['userid']; ?>    .</p>
  <a class="active" href="logout.php">Logout</a>
</div>
    





<center><h1><font color="green">ADMIN PAGE</font></h1></center>
<center><h2><font color="green">User Booking</font></h2></center>

    <center>
 
  <div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <center><tr>
              <th>Booking id</th>
              <th>User-id</th>
			  <th>pickup</th>
			  <th>vehicle-id</th>
			  <th>Driver-id</th>
			  <th>Total cost</th>

          </tr></center>
<?php
 require('db.php');
$res="select * from userbooking";
$result=mysqli_query($con,$res);
if (!$result)
{
  echo("Error description: " );
}
else
{
while(($row = mysqli_fetch_assoc($result)))
    {
		
        $bookid = $row['bookid'];
        $userid = $row['userid'];
		$pickup=$row['pickup'];
		$vehicleid=$row['vehicleid'];
		$driverid=$row['driverid'];
		$cost=$row['cost'];
     	
?>
    
	<tr>
        <td><?php echo $bookid ;  ?> </td>
	    <td><?php echo $userid ; ?> </td>           
	    <td><?php echo $pickup ; ?> </td>
	    <td><?php echo $vehicleid ; ?> </td>
	    <td><?php echo $driverid ; ?> </td>
	    <td><?php echo $cost ; ?> </td>

		
	   </tr>
<?php		
}}


?>
 


</body>
</html>