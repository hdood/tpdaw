<?php 
session_start() ; 
unset($_SESSION["v"]) ;
session_destroy() ; 
header("location:../index.php") ; 
?>