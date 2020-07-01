<?php

session_start();
header('location:check.php');

$con= mysqli_connect("127.0.0.1:3308", "root", "", "foodproject") or
die('error connecting!!');
//echo "<pre>"; print_r($_POST); exit;
if(isset($_POST['pid']) && isset($_POST['emid']) && isset($_POST['tprice']) )
{
$pid1= $_POST['pid'];
$emid1= $_POST['emid'];
$tprice1= $_POST['tprice'];
}

$ss = "select * from payment ";
$result = mysqli_query($con,$ss);
$num_rows = mysqli_num_rows($result);
//echo "<pre>"; print_r($num_rows); exit;
if(empty($num_rows))
{
echo "<script>alert('something went wrong please try again later!!')</script>";
}
else
{
  $_SESSION["pid2"]=$pid1;
  $_SESSION["emid2"]=$emid1;
  $_SESSION["tprice2"]=$tprice1;

  $reg = "insert into payment(eid,payid,totalprice) values('$emid1','$pid1', '$tprice1' )";
  mysqli_query($con, $reg);
  //header('location:home.php');
  echo "string";

}
 ?>
