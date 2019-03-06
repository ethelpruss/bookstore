<?php 
 include "dependencies.php";
 include "headerNav.php";
?>
  
<div class="container-fluid bg-3 text-center">    
<br><h3>Audiobooks</h3><br><br>

<?php
$_SESSION['type'] = 'audiobook';
include "productGallery.php";
?>

<?php 
 include "footer.php";
?>

</body>
</html>