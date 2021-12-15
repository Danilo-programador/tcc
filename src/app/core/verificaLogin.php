<?php
session_start();
 if(!isset($_SESSION['usuario'])) {
   header("location: //localhost/TCC_2021-main/src/");   
 }
?>