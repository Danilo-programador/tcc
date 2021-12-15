<?php
     include("C:\\xampp\htdocs\TCC_2021-main\src\app/controller/adm.php");
    //include("verificaLogin.php");
    $adm = new Adm();
    $result = $adm->searchClinicData();
?>