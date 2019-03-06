<?php 
 include "dependencies.php";
 include "headerNav.php";
?>

  
<div class="container-fluid bg-3 text-center"> 
<br><h3>Sale</h3><br><br>
<div class="row">
<?php
$_SESSION['type'] = 'audiobook';
include "productGallery.php";
?>
</div>

<?php 
 include "footer.php";
?>

</body>
</html>