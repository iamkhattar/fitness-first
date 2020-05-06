<?php

session_start();
session_unset();
header("Location: ../index.php");
console.log("You have been logged out") 

?>