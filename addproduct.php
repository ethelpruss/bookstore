<?php

// Check if the session storage doesnt have an array for the cart, if it doesn't: create a new empty one
if(empty($_SESSION["shopping_cart"])) 
{
    $_SESSION["shopping_cart"] = array();
    $status = "<div class='alert alert-info' role='alert'>Product has been added to your cart!</div>";
}

if(!empty($_POST["itemID"]))
{ 
    // Check if post request isnt empty
    array_push($_SESSION["shopping_cart"], $_POST["idproduct"]); // Add product ID to shopping cart
}

?>