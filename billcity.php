<?php
include("db.php");
include("auth.php");
?>
<?php
 if(isset($_POST['submit']))
 	 echo "<script>alert('Booking successful.Generate your bill.');</script>";
	 {$us=$_SESSION["userid"];
	
$pickup=mysqli_real_escape_string($con,$_POST['pickup']);
$dropto=mysqli_real_escape_string($con,$_POST['dropto']);
$cartype=mysqli_real_escape_string($con,$_POST['cartype']);

$qu="SELECT * from users where userid='$us'";
$run=mysqli_query($con,$qu);
$row=mysqli_fetch_array($run);

$que="SELECT * FROM  `driver` 
ORDER BY RAND()
LIMIT 1";
$run1=mysqli_query($con,$que);
$row1=mysqli_fetch_array($run1);
$driverid=$row1['driverid'];

$us=$_SESSION["userid"];
$quf="select * from place where pvalue='$pickup'";
$qux="select * from place where pvalue='$dropto'";
$run2=mysqli_query($con,$quf);
$run3=mysqli_query($con,$qux);
$row2=mysqli_fetch_array($run2);
$row3=mysqli_fetch_array($run3);
$pick=$row2['pname'];

$pk=$pickup;
$dr=$dropto;
$temp = pow($pk,2)-pow($dr,2);
$temp2= abs($temp);
$dist=sqrt($temp2);
$ridecost=round($dist * 15);

$carrent=(float)$cartype;
$subtotal= $ridecost + $carrent + 50;
$total=round($subtotal + ($subtotal * 0.18));

$qvehi="select * from cartype where cvalue='$cartype'"; 
$runv=mysqli_query($con,$qvehi);
$rowv=mysqli_fetch_array($runv);
$ctype=$rowv['ctype'];

$quvid="SELECT * FROM  `$ctype`
 ORDER BY RAND()
LIMIT 1";
 $runvi=mysqli_query($con,$quvid);
$rowvi=mysqli_fetch_array($runvi);
$vehicleid=$rowvi['vehicleid'];

$quee="
insert into userbooking(userid, pickup, vehicleid, driverid, cost)
values('$us','$pick','$vehicleid','$driverid','$total')";
$result = mysqli_query($con,$quee);

}
?>
<?php

?>

<?php

?>

<?php

?>



<?php

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
            Address :  <output name="x"><?php echo $row2['pname']; ?></output><br>
            drop location   :  <output name="x"><?php echo $row3['pname']; ?></output><br>
            Phone   : <output name="x"><?php echo $row['mobile']; ?></output><br>
            <output name="x"></output><br></p>
			
        </p>  </div>
 <div class="column"><center><h1><font color="green">INVOICE</font></h1></center><img src="images/invoice.jpg" alt="Mountains" style="width:100%">
 <output name="x"></output><br></p></div>
  <div class="column">
      <h2><b><font color="green">Driver Details:</font></b></h2>
          <p align="left"> Driver Name    :<output name="x"><?php echo $row1['dname']; ?></output> <br>
            Driver license number  : <output name="x"><?php echo $row1['dlicense']; ?></output><br>
            Phone   : <output name="x"><?php echo $row1['dphone']; ?></output><br>
			Cab type : <output name="x"><?php echo $ctype; ?></output><br>
			 Cab number :  <output name="x"><?php echo $rowvi['vregno']; ?></output><br></p>
			
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
    <td>₹<?php echo $ridecost; ?></td>
  </tr>
  <tr>
    <td>2.Cab rent</td>
    <td>₹<?php echo $carrent; ?></td>
  </tr>
    <tr>
    <td>3.service charge </td>
    <td>₹50</td>
  </tr>
</table>
    <center>
    <h4><b><font color="green">SUBTOTAL:&nbsp;₹<?php echo $subtotal; ?></font></b></h4>
    <h4><b><font color="">GST:&nbsp;18%</font></b></h4>
    <h3><b><font color="green">TOTAL:&nbsp;₹<?php echo $total; ?></font></b></h3>
    </center>
    <center><h4><b><font color="green">Thank you very much, we really appreciate your buissness.</font></b></h4></center>


</body>
   

</html>