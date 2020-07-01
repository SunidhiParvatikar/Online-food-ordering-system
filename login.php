<?php  session_start(); ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
 CRAVIN' FOR CALORIES
    </title>
    <link rel="stylesheet" type="text/css" href="style.css?ver=0.1">
  </head>
  <body>




<div class="contain"><br>
  <div class="heading">
    <h2 style="color:white; text-align:center;">WELCOME TO</h2>
    <h1 style="color:white; text-align:center;">CRAVIN FOR CALORIES</h1>
  </div>
    <div class="formbox">
       <div class="button-box">
         <div id="btn"></div>
<button type="button" class="toggbutton" onclick="login()">Login</button>
<button type="button" class="toggbutton" onclick="register()">Register</button>
 </div>

 <form id="login" class="inputgrp" action="valid.php" method="post">
   <input type="text" class="field" name="FirstName" placeholder=" Enter FirstName " required><br>
   <input type="text" class="field" name="LastName" placeholder=" Enter LastName" required><br>
   <input type="text" class="field" name="Address" placeholder=" Enter Address" required><br>
   <input type="text" class="field" name="PhoneNumber" placeholder=" Enter PhoneNumber " required><br>
     <input type="email" class="field" name="Email_Id" placeholder=" Enter Email_Id" required><br>
      <input type="password" class="field" name="Password" placeholder="Enter  Password" required><br>
    <input type="submit" name="regbtn" class="btnprimary" value="Login">
 </form>

       <form id="register" class="inputgrp" action="connect.php" method="post">
         <input type="text" class="field" name="FirstName" placeholder=" Enter FirstName " required><br>
         <input type="text" class="field" name="LastName" placeholder=" Enter LastName" required><br>
         <input type="text" class="field" name="Address" placeholder=" Enter Address" required><br>
         <input type="text" class="field" name="PhoneNumber" placeholder=" Enter PhoneNumber " required><br>
           <input type="email" class="field" name="Email_Id" placeholder=" Enter Email_Id" required><br>
            <input type="password" class="field" name="Password" placeholder="Enter  Password" required><br>
          <input type="submit" name="regbtn" class="btnprimary" value="Register">
       </form>
   </div>
   </div>

<script >
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");

function register() {
  x.style.left='-400px';
    y.style.left='50px';
    z.style.left='110px';
}

function login() {
  x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';

}

</script>



  </body>
</html>
