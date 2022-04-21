<?php 
//Simple logout function that sends user back to homepage
//Called in 

session_start();

session_unset();

session_destroy();

header("Location: index.html");
?>
