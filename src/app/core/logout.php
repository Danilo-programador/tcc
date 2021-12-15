<?php  
   session_start();
   if(isset($_SESSION['usuario'])) {
      $verifica = session_destroy();
      if($verifica == true) {
         header("location: //localhost/TCC_2021-main/src/"); 
         die();
      }
      else {
         echo "falso";
      }
   }
   else {
      header("location: //localhost/TCC_2021-main/src/"); 
   }

   /*
   if(isset($_SESSION['usuario'])) {
        session_destroy();
        header("location: //localhost/TCC_2021-main/src/"); 
     }
   else {
    header("location: //localhost/TCC_2021-main/src/"); 
    die();
   }*/
