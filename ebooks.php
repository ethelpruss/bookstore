
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bookstore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Custom css -->
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<!-- Fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Neptune</h1>
        <p class="lead">Books, audiobooks and e-books</p>
      </div>
    </div>
  </div>
</header>


<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">
<i class="fas fa-dove fa-2x"></i>
    </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sale.php">Sale</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ebooks.php">E-books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="audiobooks.php">Audiobooks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a class="navbar-brand" href="cart.php">
    <span class="fa-stack fa-sm">
        <i class="fa fa-square fa-stack-2x"></i>
        <i class="fa fa-shopping-cart fa-stack-1x"></i>
    </span>
    </a>
  </div>
</nav>
 

<div class="container-fluid bg-3 text-center"> 
<br><h3>Books</h3><br><br>
<div class="row">
<?php
include "db.php";
$query = "SELECT * FROM `product`";
$result = mysqli_query(
  $connection,
  $query
  );
  foreach(mysqli_fetch_all($result, MYSQLI_ASSOC) as $row){
  $name = $row['name'];
  $code = $row['code'];
  $price = $row['price'];
  $image = $row['image'];
  $id = $row['idproduct'];

    echo '<div class="col-sm-6 col-md-3">';
    echo '<div class="caption">';
    echo '<h4> ' . $name . '</h4>';
    echo '</div>';
    echo '<div class="thumbnail">';
    echo '<div class="view overlay">';
    echo '<img src="' . $image . '" alt="'. $name . '" class="img-fluid">';
    echo '<div class="mask rgba-red-strong">';
    echo '</div>';
    echo '</div>';
    echo '<div class="caption">';
    echo '<h5> ' . $price . '</h5>';
    echo '<p><a href="cart.php" class="btn btn-success" role="button">Add to Cart</a></p>';
    echo '</div>';
    echo '</div>';
    echo '<br><br><br></div>';
  }
?>
</div>
<br>

<footer class="jumbotron text-center" style="margin-bottom:0">
  <p></p>
</footer>

</body>
</html>