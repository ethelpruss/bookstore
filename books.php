<!DOCTYPE html>
<html lang="en">

<?php 
    include "dependencies.php";
    echo "<body>";
    include "headerNav.php";

    $_SESSION['type'] = 'book';
    include "productGallery.php";

    include "footer.php";
?>

</body>
</html>