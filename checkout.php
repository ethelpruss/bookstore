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
 include "headerNav.php";
 ?>

<section class="mb-4">
<div class="jumbotron">
    <h1>Checkout</h1><br> 
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="checkoutName">Full name</label>
      <input type="text" class="form-control" id="input" placeholder="Name" required>
    </div> 
    <div class="form-group col-md-6">
      <label for="checkoutEmail">E-mail</label>
      <input type="email" class="form-control" id="checkoutEmail" placeholder="E-mail" required>
    </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
  <div class="form-group col-md-3">
      <label for="inputCountry">Country</label>
      <input type="text" class="form-control" id="inputCountry" required>
    </div>   
    <div class="form-group col-md-3">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState">
    </div>    
  <div class="form-group col-md-3">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required>
    </div>

    <div class="form-group col-md-3">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" required>
    </div>
  </div>
  <div class="form-group">
  <label for="inputShipping">Shipping method</label>
      <select id="inputShipping" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  </div>
      

<br>
<div class="float-right">
<a class="btn btn-primary" href="cart.php" id="returnButton">Return to cart</a>
<button type="submit" class="btn btn-success" id="paymentButton">Proceed to payment options</button>
</form> 
</div>
</div>
</section>

<?php 
 include "footer.php";
?>

</body>
</html>