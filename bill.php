<?php
include("db.php");
include("auth.php");
?>
<?php
$us=$_SESSION["userid"];
$qu="SELECT * from users where userid='$us'";
$run=mysqli_query($con,$qu);
$row=mysqli_fetch_array($run);
?>

<?php
$us=$_SESSION["userid"];
$que="SELECT * from driver where driverid='1'";
$run1=mysqli_query($con,$que);
$row1=mysqli_fetch_array($run1);
?>

<!DOCTYPE html>
<html>
<head>
    
	 <link rel="stylesheet" href="css/stylecard.css" type="text/css">
	
</div>

    <style>
    .bg-img {
  /* The image used */
 

  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat:;
  background-size: ;
  position: ;
}
        h6 {
  border-style: solid;
  border-width: thin;
}

div {
  border-style: solid;
  border-width: thin;
}
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}s
        </style>
    </head>
<body bgcolor="#FBFBFD">

<div><a href="index.php">  <img src="images/logo2.jpg"   width="250" height="50" align="center"></a>
	<center><font color="green"><h1>JUST CABS</h1></font></center>   
	<center><font color="darkblue"><h2>ride with freedom</h2></font></center>

<center>

      <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        
      </div><!--End Info-->
    
 
    <div class="row">
  <div class="column">
 
      <h2><b><font color="green">Bill TO</font></b></h2>
         <p align="left">  Name    :<output name="x"><?php echo $row['name']; ?></output> <br>
            Address : users pickup location<br>
            Email   : user phone number<br>
            Phone   : <output name="x"><?php echo $row['mobile']; ?></output><br></p>
			
        </p>  </div>
 <div class="column"><center><h1><font color="green">INVOICE</font></h1></center><img src="images/invoice.jpg" alt="Mountains" style="width:100%"></div>
  <div class="column">
      <h2><b><font color="green">Driver Details:</font></b></h2>
          <p align="left"> Driver Name    :<output name="x"><?php echo $row1['dname']; ?></output> <br>
            Address : users pickup location<br>
            Email   : user phone number<br>
            Phone   : <output name="x"><?php echo $row1['dphone']; ?></output><br></p>
			
        </p>
        </div>
        </div>
		</center><!--End InvoiceTop-->
      </div>
		
		
		
		
		
		

    </center>
    
<table style="width:100%">
  
  <tr>
    <th>Cost breakdown</th>
    <th>Price</th>
  </tr>
  <tr>
    <td>1.Ride charge</td>
    <td>₹100</td>
  </tr>
  <tr>
    <td>2.Cab rent</td>
    <td>₹50</td>
  </tr>
    <tr>
    <td>3.service charge </td>
    <td>₹50</td>
  </tr>
</table>
    
    <h4><b><font color="green">SUBTOTAL:₹</font></b></h4>
    <h4><b><font color="">GST:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18%</font></b></h4>
    <h4><b><font color="green">TOTAL:₹</font></b></h4>
    
    <center><h4><b><font color="green">Thank you very much, we really appreciate your buissness.</font></b></h4></center>


</body>
    

</html>