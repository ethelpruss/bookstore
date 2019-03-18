<!DOCTYPE html>
<html lang="en">

<?php 
    include "dependencies.php";
    echo '<body>';
    include "headerNav.php";
?>

<div class="jumbotron" id="spacer"></div>
<div class="container w-60 align-items-center justify-content-center" id="feature">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
<div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="/bookstore/images/slide1.jpg" alt="First slide">
</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/bookstore/images/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/bookstore/images/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</section>
</div>

<?php
$_SESSION['type'] = 'book';
include "productGallery.php";
?>

<?php 
 include "footer.php";
?>

</body>
</html>