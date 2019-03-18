<script src="/bookstore/javascript/addToCart.js"></script>
<div class= "jumbotron text-center">
  <br />
  <h3>
  <?php
    if ($_SESSION['type'] == 'ebook') {
      echo "E-books";
    } else if ($_SESSION['type'] == 'book') {
      echo "Books";
    } else if ($_SESSION['type'] == 'audiobook') {
      echo "Audiobooks";
    }
  ?>
  </h3>
  <br />
  <br />
</div>
<div class="container-fluid bg-3 text-center"> 
  <div class="row">
    <div class="row">

      <?php
        include "db.php";
        include "addproduct.php";
        $type = $_SESSION['type'];
        $query = "SELECT * FROM `product` WHERE `type` = '$type'";
        $result = mysqli_query(
          $connection,
          $query
        );

        /* Check if the session storage doesnt have an array for the cart, if it doesn't: create a new empty one
        if(empty($_SESSION["shopping_cart"])) {
          $_SESSION["shopping_cart"] = array();
        }*/

        foreach(mysqli_fetch_all($result, MYSQLI_ASSOC) as $row){
        $idproduct = $row['idproduct'];  
        $name = $row['name'];
        $code = $row['code'];
        $price = $row['price'];
        $image = $row['image'];
        $description = $row['description'];
        $stock = $row['stock'];

        /*$cartArray = array(
          $code=>array(
          'name'=>$name,
          'code'=>$code,
          'price'=>$price,
          'quantity'=>1,
          'image'=>$image)
        );*/

          echo '<div class="col-sm-6 col-md-3">';
          echo '<div class="caption">';
          echo '<h5> ' . $name . '</h5><br>';
          echo '</div>';
          echo '<div class="thumbnail">';
          echo '<div class="view overlay">';
          echo '<img src="' . $image . '" alt="'. $name . '" class="img-responsive center-block">';
          echo '<div class="mask rgba-red-strong">';
          echo '</div>';
          echo '</div>';
          echo '<div class="caption">';
          echo '<p class="text-secondary">' . $price . '</p>';
          echo '<button type="button" class="btn btn-primary" id="'.$idproduct.'" data-toggle="modal" data-target="#tocartModal">Add to cart</button>';
          echo '</div>';
          echo '</div>';
          echo '<br><br><br></div>';
        }
      ?>
    </div>

<!-- Modal -->
<div class="modal fade" id="tocartModal" tabindex="-1" role="dialog" aria-labelledby="tocartModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tocartModalTitle">Add to cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo $status; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Keep shopping</button>
        <a href="cart.php" class="btn btn-success">Proceed to checkout</a>
      </div>
    </div>
  </div>
</div>
</div>
<div class= "jumbotron"></div>