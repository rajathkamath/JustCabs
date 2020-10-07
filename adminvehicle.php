<?php
include("auth.php");
require('db.php');

 


?>
<!DOCTYPE html>
<html>
<head>
   <a href="index.php">  <center><img src="images/logo2.jpg"  alt="Smiley face" width="250" height="50" align="left"></a></center>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css" type="text/css">
     
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
<body bgcolor="#FBFBFD">


    <div class="topnav">
    <a href="adminuser.php">USER details</a>
    <a href="admindriver.php">Driver details</a>
    <a href="adminvehicle.php">Vehicle details</a>
  <a class="active" href="admin.php">Home</a>
  <p align="right"> Welcome <?php echo $_SESSION['userid']; ?>    .</p>
  <a class="active" href="logout.php">Logout</a>
</div>
	<title>
 admin
 </title>
<center>
 <body>
 <center><h1><font color="green">ADMIN PAGE</font></h1></center>
<center><h2><font color="green">Vehicle deatails</font></h2></center>

  <div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <center><tr>
              <th>vehicle id</th>
              <th>Vehicle NAME</th>
			  <th>Vehicle type</th>
			  <th>Vehicle registration number</th>

          </tr></center>
		  
 <?php
 
$res="select * from micro";
$result=mysqli_query($con,$res);
if (!$result)
{
  echo("Error description: " );
}
else
{
while(($row = mysqli_fetch_assoc($result)))
    {
		
        $vehicleid = $row['vehicleid'];
        $vname = $row['vname'];
		$vtype=$row['vtype'];
		$vregno=$row['vregno'];

     	
?>
		<tr>
        <td><?php echo $vehicleid ;  ?> </td>
	    <td><?php echo $vname ; ?> </td>           
	    <td><?php echo $vtype ; ?> </td>
	    <td><?php echo $vregno ; ?> </td>

		
	   </tr>
<?php		
}}

 
?>


<p>

<div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <center><tr>
              <th>vehicle id</th>
              <th>Vehicle NAME</th>
			  <th>Vehicle type</th>
			  <th>Vehicle registration number</th>

          </tr></center>
<?php
 
$res="select * from mini";
$result=mysqli_query($con,$res);
if (!$result)
{
  echo("Error description: " );
}
else
{
while(($row = mysqli_fetch_assoc($result)))
    {
		
        $vehicleid = $row['vehicleid'];
        $vname = $row['vname'];
		$vtype=$row['vtype'];
		$vregno=$row['vregno'];

     	
?>
		<tr>
        <td><?php echo $vehicleid ;  ?> </td>
	    <td><?php echo $vname ; ?> </td>           
	    <td><?php echo $vtype ; ?> </td>
	    <td><?php echo $vregno ; ?> </td>

		
	   </tr>
<?php		
}}

 
?></p>



<p>

<div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <center><tr>
              <th>vehicle id</th>
              <th>Vehicle NAME</th>
			  <th>Vehicle type</th>
			  <th>Vehicle registration number</th>

          </tr></center>
<?php
 
$res="select * from sedan";
$result=mysqli_query($con,$res);
if (!$result)
{
  echo("Error description: " );
}
else
{
while(($row = mysqli_fetch_assoc($result)))
    {
		
        $vehicleid = $row['vehicleid'];
        $vname = $row['vname'];
		$vtype=$row['vtype'];
		$vregno=$row['vregno'];

     	
?>
		<tr>
        <td><?php echo $vehicleid ;  ?> </td>
	    <td><?php echo $vname ; ?> </td>           
	    <td><?php echo $vtype ; ?> </td>
	    <td><?php echo $vregno ; ?> </td>

		
	   </tr>
<?php		
}}

 
?></p>









<p>

<div class="box-body table-responsive padding">
     <table border="5" cellspacing="3" cellpadding="3">
          <center><tr>
              <th>vehicle id</th>
              <th>Vehicle NAME</th>
			  <th>Vehicle type</th>
			  <th>Vehicle registration number</th>

          </tr></center>
<?php
 
$res="select * from suv";
$result=mysqli_query($con,$res);
if (!$result)
{
  echo("Error description: " );
}
else
{
while(($row = mysqli_fetch_assoc($result)))
    {
		
        $vehicleid = $row['vehicleid'];
        $vname = $row['vname'];
		$vtype=$row['vtype'];
		$vregno=$row['vregno'];

     	
?>
		<tr>
        <td><?php echo $vehicleid ;  ?> </td>
	    <td><?php echo $vname ; ?> </td>           
	    <td><?php echo $vtype ; ?> </td>
	    <td><?php echo $vregno ; ?> </td>

		
	   </tr>
<?php		
}}

 
?></p>
 </form>
</body></center>
</html>