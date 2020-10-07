<!doctype html>
<html>
<head>
<title>
My connectivity
</title>
</head>
<body>
<form name="frm" action="" method="POST">
<center>
<input type="text" name="fname" placeholder="Enter Name" required/><br/>
<input type="number" name="phone" placeholder="Enter mobile no" required/><br/>
<input type="submit" name="sub" value="Kindly click here"/>
</center>
</form>
<?php
$conn=mysqli_connect("localhost","root","","testa");
  if(isset($_POST['sub']))
{
  $pname=mysqli_real_escape_string($conn,$_POST['fname']);
$pphone=$_POST['phone'];
$querystring="INSERT INTO studinfo(name,mphone) values('$pname','$pphone')";
mysqli_query($conn,$querystring);
echo "Value inserted";
}

?>

<hr/>
<h3> Search Option</h3>
<form name="frm" action="" method="POST">
<center>

<input type="number" name="phone" placeholder="Enter mobile no" required/><br/>
<input type="submit" name="search" value="Kindly click here"/>
</center>
</form>

<?php
  if(isset($_POST['search']))
{
$pphone=$_POST['phone'];
  $qu="SELECT * from studinfo where mphone='$pphone'";
$run=mysqli_query($conn,$qu);
$row=mysqli_fetch_array($run);
  echo $row['name'];
}


?>



</body>
</html>
