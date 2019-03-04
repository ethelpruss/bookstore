<?php
$connection = mysqli_connect("localhost","admin","Reverse5","bookstore");
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
    }
?>