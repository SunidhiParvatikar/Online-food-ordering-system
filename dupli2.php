<?php session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="menustyle.css?ver=1.7">
  </head>
  <body>
    <div class="container">
      <div class="menubar">
        <ul>
        <li>CRAVIN' for CALORIES</li>
        <li class="active"><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
       <li class="active1"><a href="dupli2.php"><i class="fa fa-sticky-note"></i>Menu</a></li>
        <li><a href="mycart.php"><i class="fa fa-shopping-cart"></i>My cart</a></li>
        <li><a href="myorders.php"><i class="fa fa-shopping-bag"></i>My orders</a></li>
        </ul>
</div>
<br>
<br><br>
      <?php
        $connect = mysqli_connect('127.0.0.1:3308', 'root', '', 'foodproject');
      $query = 'SELECT * FROM fooditems ORDER BY Food_id  ';
      $result = mysqli_query($connect,$query);
      if(mysqli_num_rows($result)>0)
      {
        while ($row = mysqli_fetch_array($result))
        {
          ?>
          <div class="col">
            <form method="post" action="mycart.php?action=add&Food_id=<?php echo $row["Food_id"]; ?>" >
              <div class="fooditems">
              <img src="<?php echo $row['Image'];?>" class="img-responsive" style="width:400px; height: 300px;"/>
                <h4 class="text-info"><?php echo $row['Foodname']; ?></h4>
                <h4 class="text">Rs.<?php echo $row['Price']; ?></h4>
                  <input type="text" name="quantity" class="form-control" value="1"/>
                  <input type="hidden" name="hidden_name" value="<?php echo $row['Foodname'] ?>"/>
                    <input type="hidden" name="hidden_price" value="<?php echo $row['Price'] ?>"/>
                      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info" value="Add to cart"/>
                        </div>
                 </div>
            </form>
      <br>
          <?php
        }
      }
       ?>
<br>
         </div>
         <br><br><br>
     </body>
   </html>
