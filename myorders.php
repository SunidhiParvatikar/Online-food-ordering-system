<?php

session_start();
  $connect = mysqli_connect('127.0.0.1:3308', 'root', '', 'foodproject');

  if(isset($_POST["add_to_cart"]))
  {
    if(isset($_SESSION["shopping_cart"]))
    {
      $item_array_id = array_column(  $_SESSION["shopping_cart"], "item_id");
      if (!in_array($_GET["Food_id"],   $item_array_id ))
      {
        $count = count( $_SESSION["shopping_cart"] );
        $item_array = array(
          'item_id' => $_GET["Food_id"],
          'item_name' => $_POST["hidden_name"],
          'item_price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][$count] = $item_array;
      }
      else
      {
        echo '<script>alert("Item already added ")</script>';
        echo '<script>window.location="mycart.php"</script>';
      }
    }
    else
    {
      $item_array = array(
     'item_id' => $_GET["Food_id"],
     'item_name' => $_POST["hidden_name"],
     'item_price' => $_POST["hidden_price"],
     'item_quantity' => $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][0] = $item_array;
    }

  }
  if(isset($_GET["action"]))
 {
    if($_GET["action"] == "delete" )
    {
      foreach (  $_SESSION["shopping_cart"] as $key => $fooditem)
      {
        if ($fooditem["item_id"] == $_GET["Food_id"])
        {
           unset($_SESSION["shopping_cart"][$key]);
           echo '<script>alert("Item removed ")</script>';
           echo '<script>window.location="mycart.php"</script>';
        }
      }
    }
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="orderstyle.css?ver=2.9">
  </head>
  <body>
    <div class="container">
      <div class="menubar">
        <ul>
        <li class="acti">CRAVIN' for CALORIES</li>
        <li class="active"><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
       <li class="active1"><a href="dupli2.php"><i class="fa fa-sticky-note"></i>Menu</a></li>
        <li class="active2"><a href="mycart.php"><i class="fa fa-shopping-cart"></i>My cart</a></li>
        <li class="active3"><a href="myorders.php"><i class="fa fa-shopping-bag"></i>My orders</a></li>
        </ul>
      </div>
      <br>
      <br>


<br><br><br><h4 style="color:red; font-size:30px;">ORDER  SUMMARY :</h4>
<br>
<h4 style="color:yellow; text-align:center; font-size:30px;">Your shipping address:</h4>




<div class="ship">

  <?php
  echo "<font size='4'>";
  echo "Your Fullname : ".$_SESSION["FirstName2"]." ".$_SESSION["LastName2"];
  echo "<br>";
  echo "Your address : ".$_SESSION["Address2"];
  echo "<br>";
  echo "Your PhoneNumber : ".$_SESSION["PhoneNumber2"];
  echo "<br>";
  echo "Your Email_Id : ".$_SESSION["Email_Id2"];
  echo "<br>";
  echo "<br>";
   ?>
</div>

<div style="clear:both"></div>
<br/>
<br>
<br>
<div class="container1">
  <br>
  <div class="table-responsive">
   <table class="table">
     <div class="tablein">


     <tr><th colspan="20"> <h3> Your Order Details </h3> </th> </tr>
     <tr>
       <th width="40%" >Food_name</th>
       <th width="10%">quantity</th>
       <th width="20%">Price</th>
       <th width="15%">Total</th>

     </tr>
  <?php
  if(!empty($_SESSION['shopping_cart'])):
  $total=0;
  foreach ($_SESSION['shopping_cart'] as $key => $fooditem) :
  ?>
  <tr>
  <td ><?php echo $fooditem['item_name']; ?></td>
  <td><?php echo $fooditem['item_quantity']; ?></td>
  <td><?php echo $fooditem['item_price']; ?></td>
  <td><?php echo number_format($fooditem['item_price'] * $fooditem['item_quantity'],2); ?></td>

 </tr>

  <?php
  $total+=($fooditem['item_quantity']*$fooditem['item_price']);
  endforeach;
  ?>
  <tr>
  <td colspan="3" align="right">Total</td>
  <td align="right">Rs. <?php  echo number_format($total,2); ?></td>
  <td></td>
  </tr>
  <tr>
  <td colspan="5">
  <?php
  if(isset($_SESSION['shopping_cart'])):
  if(count($_SESSION['shopping_cart'])>0):
  ?>

  <?php endif; endif; ?>
  </td>
  </tr>
  <?php
  endif;
  ?>
   </div>
  </table>
    </div>
<br><br>
</div>
<br><br>

<div class="payment1">

  <h5>Payment Method : Cash on delivery (by default)  </h5><br><br></div>

<div class="pd">
  <form class="paym" action="test.php" method="post">
      Payment id: <input type="text" class="pmd" name="pid" value="<?php $payid=uniqid(); echo $payid ?>">
         Email_Id: <input type="text" class="emd" name="emid" value=" <?php echo $_SESSION["Email_Id2"] ?> ">
         Total_price: <input type="text" class="tp" name="tprice" value="<?php echo number_format($total,2);  ?>">
         <button type="submit" name="sub-btn" class="btn-pay">Continue</button>
  </form>
</div>






<br><br><br>



<br><br><br><br><br>
  </body>
</div>
</html>
