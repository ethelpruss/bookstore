<?php 
 include "dependencies.php";
 include "headerNav.php";
?>

<div class="container-fluid bg-3 text-center"> 
<br><h3>E-books</h3><br><br>
<div class="row">
<?php
$_SESSION['type'] = 'ebook';
include "productGallery.php";
?>
</div>

<?php 
 include "footer.php";
?>

</body>
</html>