<?php

// Check if the session storage doesnt have an array for the cart, if it doesn't: create a new empty one
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = array();
}

if(!empty($_POST["itemID"]) { // Check if post request isnt empty
    array_push($_SESSION["shopping_cart"], $_POST["itemID"]); // Add product ID to shopping cart
}

?>