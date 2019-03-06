<?php 
 include "dependencies.php";
 include "headerNav.php";
?>

  
<div class="container-fluid bg-3 text-center"> 
<br><h3>Books</h3><br><br>
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