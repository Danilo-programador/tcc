<?php
     include_once('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');
     if(isset($_GET['id'],$_GET['idClinica']) && !empty($_GET['id'])
        && !empty($_GET['idClinica'])) {
         
        include_once('../controller/clinica.php');
        include_once('../controller/controller.php');

        $exclui = new clinica();
        $verifica = new Controller();

        $idVacina = intval($verifica->clean($_GET['id']));
        $idClinica = intval($verifica->clean($_GET['idClinica']));
        $resultado = $exclui->excludeVaccine($idVacina,$idClinica);
        if($resultado = true) {
            $msg = "Vacina exluida com sucesso";
            $url = "//localhost/TCC_2021-main/src/app/view/clinica/configuracao/vacina.php";
            createAlert($msg, $url);
            die();
        }
        else {
            $msg = "Vacina não excluida!Verifique";
            $url = "//localhost/TCC_2021-main/src/app/view/clinica/configuracao/vacina.php";
            createAlert($msg, $url);
        }

     }
     else {
        $msg = "Vacina não pode ser excluida";
        $url = "//localhost/TCC_2021-main/src/app/view/clinica/configuracao/vacina.php";
        createAlert($msg, $url);
        die();
     }
?>