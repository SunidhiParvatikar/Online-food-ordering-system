<?php
session_start();
//header('location:home.php');

$con= mysqli_connect("127.0.0.1:3308", "root", "", "foodproject") or
die('error connecting!!');

if(isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Address']) && isset($_POST['PhoneNumber']) && isset($_POST['Email_Id']) && isset($_POST['Password']))
{
$FirstName1= $_POST['FirstName'];
$LastName1= $_POST['LastName'];
$Address1= $_POST['Address'];
$PhoneNumber1 = $_POST['PhoneNumber'];
$Email_Id1 = $_POST['Email_Id'];
$Password1 = $_POST['Password'];
}

$ss = "select * from customer where Email_Id = '$Email_Id1' && Password='$Password1' ";
$result = mysqli_query($con,$ss);
$num_rows = mysqli_num_rows($result);
//echo "<pre>"; print_r($num_rows); exit;
if(empty($num_rows))
{
echo "<script>alert('Email_Id or Password wrong')</script>";
header('location:login.php');

}
else
{
  $_SESSION["FirstName2"]=$FirstName1;
  $_SESSION["LastName2"]=$LastName1;
  $_SESSION["Address2"]=$Address1;
  $_SESSION["PhoneNumber2"]=$PhoneNumber1;
  $_SESSION["Email_Id2"]=$Email_Id1;

  header('location:home.php');
}

 ?>
