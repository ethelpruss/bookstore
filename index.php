<?php 
 include "dependencies.php";
 include "headerNav.php";
?>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Featurebox</h1>      
    <p><i class="fas fa-ad fa-10x" style="color:#6c5772;"></i></i></p>
  </div>
</div>
  
  
<div class="container-fluid bg-3 text-center"> 
<br><h3>Featured items</h3><br><br>
<div class="row">
<?php
$_SESSION['type'] = 'book';
include "productGallery.php";
?>
</div>

<?php 
 include "footer.php";
?>

</body>
</html>