<!DOCTYPE html>
<html lang="en">

<?php 
    include "dependencies.php";
    echo '<body>';
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
<a class="btn btn-success" id="paymentButton" href= "payment.php">Proceed to payment</a>
</form> 
</div>
</div>
</section>

<?php 
 include "footer.php";
?>

</body>
</html>