<?php

session_start();
//header('location:login.php');

$con= mysqli_connect("127.0.0.1:3308", "root", "", "foodproject") or
die('error connecting!!');
//echo "<pre>"; print_r($_POST); exit;
if(isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Address']) && isset($_POST['PhoneNumber']) && isset($_POST['Email_Id']) && isset($_POST['Password']))
{
$FirstName1= $_POST['FirstName'];
$LastName1= $_POST['LastName'];
$Address1= $_POST['Address'];
$PhoneNumber1 = $_POST['PhoneNumber'];
$Email_Id1 = $_POST['Email_Id'];
$Password1 = $_POST['Password'];
}

$ss = "select * from customer where Email_Id = '$Email_Id1' ";
$result = mysqli_query($con,$ss);
$num_rows = mysqli_num_rows($result);
//echo "<pre>"; print_r($num_rows); exit;
if(!empty($num_rows))
{
echo "<script>alert('Email_Id already exists')</script>";
}
else
{
  $_SESSION["FirstName2"]=$FirstName1;
  $_SESSION["LastName2"]=$LastName1;
  $_SESSION["Address2"]=$Address1;
  $_SESSION["PhoneNumber2"]=$PhoneNumber1;
  $_SESSION["Email_Id2"]=$Email_Id1;

  $reg = "insert into customer(FirstName,LastName,Address,PhoneNumber,Email_Id,Password)
  values('$FirstName1', '$LastName1', '$Address1', '$PhoneNumber1', '$Email_Id1', '$Password1' )";
  mysqli_query($con, $reg);
  header('location:home.php');
  
}
 ?>
