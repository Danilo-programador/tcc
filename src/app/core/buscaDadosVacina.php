<?php
 session_start();
 $idClinica = $_SESSION["usuario"];
 include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/clinica.php');
 $vacina = new  clinica();
 $result = $vacina->lookForVaccines($idClinica);    
?>