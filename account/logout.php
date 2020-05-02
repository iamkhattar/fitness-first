<?php

session_start();
unset($_SESSION["loggedin"]);
header("Location: ../index.php");
console.log("You have been logged out") 

?>