<!DOCTYPE html>
<html lang="en">
<?php 
    include "dependencies.php";
    echo '<body>';
    include "headerNav.php";
?>

<script src="/bookstore/javascript/addToCart.js"></script>

<body>

<?php
        var_dump($_POST["cartID"]);
        $id = $_POST["cartID"];
        include "db.php";
        include "addproduct.php";
        $type = $_SESSION['type'];
        $query = "SELECT * FROM `product` WHERE `idproduct` = '$id'";
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

<?php 
 include "footer.php";
?>

</body>
</html>