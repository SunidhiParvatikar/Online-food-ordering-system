
<?php  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css?ver=2.5">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="menubar">
      <ul>
      <li>CRAVIN' for CALORIES</li>
      <li class="active"><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
     <li><a href="dupli2.php"><i class="fa fa-sticky-note"></i>Menu</a></li>
      <li><a href="mycart.php"><i class="fa fa-shopping-cart"></i>My cart</a></li>
      <li><a href="myorders.php"><i class="fa fa-shopping-bag"></i>My orders</a></li>
      </ul>
<br><br><br>
<h2 class="headin">CRAVIN for CALORIES</h2>
<br><br>
<?php
echo "<font size='14'><font color='yellow'>";
 echo "Welcome"." ".$_SESSION["FirstName2"]; ?><br>

<div class="homeit">
<div class="homeit1">
<div class="homeit3">

  <p>
    You will now begin ,<br>to receive mouth-watering <br> deals exclusive for you  from <br>CRAVIN' for CALORIES
  </p>


</div>
</div>
</div>


<div id="aboutus">
<div class="abt">
  <h1>ABOUT US</h1><br></div>
  <div class="abtfood">
    <h2> For us, its just not about bringing you good food.<br>
    Its about making a connection, that's why we sit down with our chefs, and make sure you get<br>
   healthy and fresh filled with falvour tasty food.<br>
 <br>TRY US NOW!!</h2>
  </div>
</div>


<br><br><br>
      </div>
  </body>
</html>
