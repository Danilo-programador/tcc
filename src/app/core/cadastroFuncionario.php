<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['cpf']) &&
       !empty($_POST['senha']) && !empty($_POST['telefone']) && !empty($_POST['coren'])) {

            include_once('../controller/clinica.php');
            include_once('../controller/controller.php');

            $funcionario = new clinica();
            $verifica = new Controller();

            $nome = $_POST['nome'];
            $email = strtolower($_POST['email']);
            $cpf = $verifica->clean($_POST['cpf']);
            $senha = $verifica->clean($_POST['senha']);
            $telefone = $verifica->clean($_POST['telefone']);
            $coren = intval($verifica->clean($_POST['coren']));
            $tipo = "F";
            $idC = $_SESSION['usuario'];
            $idClinica = $idC['id']; 

            //Objeto da classe clinica

            $result = $funcionario->verificaFucExistente($email,$senha,$coren,$idClinica);
            if($result[0]['total'] == 0) {
                $cadastro = $funcionario->registerEmployee($nome,$email,$senha,$cpf,$coren,$telefone,$idClinica,$tipo);
                $msg = "Cadastro realizado com sucesso";
                $url = "//localhost/TCC_2021-main/src/app/view/clinica/cadastro/cadastroFuncionario.php";
                createAlert($msg, $url);
               
                die();
            }
            else {
                $msg = "Funcionário já cadastrada no sistema! Você não pode cadastrar o mesmo funcionário";
                $url = "//localhost/TCC_2021-main/src/app/view/clinica/cadastro/cadastroFuncionario.php";
                createAlert($msg, $url);
                die();
            }
    }
    else {
        $msg = "Verifique se inseriu todos os dados corretamente";
        $url = "//localhost/TCC_2021-main/src/app/view/clinica/cadastro/cadastroFuncionario.php";
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}
