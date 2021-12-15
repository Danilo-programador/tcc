<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');
    
    if ( !empty($_POST['email']) && !empty($_POST['cpf'])  && !empty($_POST['senhaNova'])) {

            include_once('../controller/controller.php');

            $verifica = new Controller();

            $email = strtolower($_POST['email']);
            $cpf = $verifica->clean($_POST['cpf']);
            $senhaNova = $verifica->clean($_POST['senhaNova']);

            $result = $verifica->esqueciSenha($email,$cpf);
            
            if($result[0]['total'] == 1) {
                 $id = $result[0]['id'];
                 $troca = $verifica->trocaSenhaEsqueciSenha($senhaNova,$id);
                 $msg = "Senha trocada com sucesso";
                 $url = '//localhost/TCC_2021-main/src/';
                 createAlert($msg, $url);
                 die();
            }
            else {
                $msg = "Usuario não encontrado no sistema";
                $url = '//localhost/TCC_2021-main/src/';
                createAlert($msg, $url);
                die();
            }
    }
    else {
        $msg = "Verifique se preencheu todos os dados!";
        $url = '//localhost/TCC_2021-main/src/';
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}