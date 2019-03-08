<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookstore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Custom css -->
<link rel="stylesheet" type="text/css" href="/bookstore/css/custom.css">
<!-- Fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='alert alert-warning' role='alert'>Product has been removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>


<?php 
 include "headerNav.php";
 ?>

<section class="mb-4">
  <div class="jumbotron">
    <div class="cart">
      <?php
      if(isset($_SESSION["shopping_cart"])){
          $total_price = 0;
      ?>	
    <div class="message_box" style="margin:10px 0px;">
      <?php echo $status; ?><br>
    </div>
    <table class="table">
    <tbody>
      <tr>
        <td></td>
        <td>Name</td>
        <td>Quantity</td>
        <td>Unit price</td>
        <td>Total</td>
        <td></td>
      </tr>	
    <?php		
    foreach ($_SESSION["shopping_cart"] as $product){
    ?>
      <tr>
        <td>
          <img src='<?php echo $product["image"]; ?>' width="50" height="50" />
        </td>
    <td><?php echo $product["name"]; ?>
    </form>
    </td>
    <td>
      <form method='post' action=''>
        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
        <input type='hidden' name='action' value="change" />
        <select name='quantity' class='quantity' onChange="this.form.submit()">
        <option <?php if($product["quantity"]==1) echo "selected";?>
        value="1">1</option>
        <option <?php if($product["quantity"]==2) echo "selected";?>
        value="2">2</option>
        <option <?php if($product["quantity"]==3) echo "selected";?>
        value="3">3</option>
        <option <?php if($product["quantity"]==4) echo "selected";?>
        value="4">4</option>
        <option <?php if($product["quantity"]==5) echo "selected";?>
        value="5">5</option>
        </select>
      </form>
    </td>
    <td><?php echo "$".$product["price"]; ?></td>
    <td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
    <td><form method='post' action=''>
    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
    <input type='hidden' name='action' value="remove" />
    <button type='submit' class='btn btn-danger btn-sm'><i class="fas fa-trash-alt"></i></button></td>
    </tr>
    <?php
    $total_price += ($product["price"]*$product["quantity"]);
    }
    ?>
    <tr>
    <td></td>
    <td colspan="5"  align="right">
    <br><br><strong>TOTAL: <?php echo "$".$total_price; ?></strong>
    <br><br><a href="checkout.php" class="btn btn-success">Check out</a>
    </td>
    </tr>
    </tbody>
    </table>		
      <?php
    }else{
      echo "<h3>Your cart is empty!</h3>";
      }
    ?>
    </div>
  
  </div>
</section>

<?php 
 include "footer.php";
?>

</body>
</html>