<?php
     include_once('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');
     if(isset($_GET['id'],$_GET['idClinica']) && !empty($_GET['id'])
        && !empty($_GET['idClinica'])) {
         
        include_once('../controller/clinica.php');
        include_once('../controller/controller.php');

        $exclui = new clinica();
        $verifica = new Controller();

        $idFuncionario = intval($verifica->clean($_GET['id']));
        $idClinica = intval($verifica->clean($_GET['idClinica']));
        $resultado = $exclui->excludeEmployee($idFuncionario,$idClinica);
        if($resultado = true) {
            $msg = "Funcionario exluida com sucesso";
            $url = "//localhost/TCC_2021-main/src/app/view/clinica/configuracao/funcionario.php";
            createAlert($msg, $url);
            die();
        }
        else {
            $msg = "Funcionario não excluido!Verifique";
            $url = "//localhost/TCC_2021-main/src/app/view/clinica/configuracao/funcionario.php";
            createAlert($msg, $url);
        }

     }
     else {
        $msg = "Funcionario não pode ser excluido";
        $url = "//localhost/TCC_2021-main/src/app/view/clinica/configuracao/funcionario.php";
        createAlert($msg, $url);
        die();
     }
?>