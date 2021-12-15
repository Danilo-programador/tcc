<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');
    
    if ( !empty($_POST['senhaAtual']) && !empty($_POST['senhaNova'])) {

        function whatType($type) {
            switch($type){
                case "U": 
                    return "cliente";
                case "F":
                    return "funcionario"; 
                case "C":
                    return "clinica";
            }
        }

            include_once('../controller/controller.php');

            $verifica = new Controller();

            $senhaAtual =  $verifica->clean($_POST['senhaAtual']);
            $senhaNova = $verifica->clean($_POST['senhaNova']);
            $id = $_SESSION['usuario'];
            $type = $id['tipo'];
            $urlLocation = whatType($type);
            if($senhaAtual != $senhaNova) {
                $idUsuario = $id['id'];
                $result = $verifica->checkPassword($idUsuario, $senhaAtual, $type);
                if($result[0]['total'] == 1) {
                    $resultadoUpdate = $verifica->changePassword($idUsuario, $senhaNova, $type);
                        $msg = "Senha alterada com sucesso";
                        $url = '//localhost/TCC_2021-main/src/app/view/'. $urlLocation .'/configuracao/alterarSenha.php';
                        createAlert($msg, $url);
                        die();
                }
                else {
                    $msg = "Sua senha atual está incorreta! Verifique se inseriu corretamente";
                    $url = '//localhost/TCC_2021-main/src/app/view/'. $urlLocation .'/configuracao/alterarSenha.php';
                    createAlert($msg, $url);
                    die();
                }
            }
            else {
                $msg = "As senha não podem ser igual!";
                $url = '//localhost/TCC_2021-main/src/app/view/'. $urlLocation .'/configuracao/alterarSenha.php';
                createAlert($msg, $url);
                die();
            }
    }
    else {
        $msg = "Verifique se inseriu as senhas corretamente! As senha devem ser diferentes";
        $url = '//localhost/TCC_2021-main/src/app/view/'. $urlLocation .'/configuracao/alterarSenha.php';
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}

?>