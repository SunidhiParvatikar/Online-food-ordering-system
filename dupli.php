<?php

session_start();
header('location:myorders.php');

$con= mysqli_connect("127.0.0.1:3308", "root", "", "foodproject") or
die('error connecting!!');
//echo "<pre>"; print_r($_POST);
if(isset($_POST['oid']) && isset($_POST['odate']))
{
  $fileid = $_POST['oid'];
  $odate = $_POST['odate'];
}
$ss = "select * from orders ";
$result = mysqli_query($con,$ss);
$num_rows = mysqli_num_rows($result);
//echo "<pre>"; print_r($num_rows);
if(empty($num_rows))
{
echo "<script>alert('something went wrong please try again later!!')</script>";
}
else {
  $i = "INSERT INTO `orders` (`order_id`, `o_date`) VALUES ('$fileid', '$odate')";
  mysqli_query($con,$i);
  echo "inserted";
}




 ?>
