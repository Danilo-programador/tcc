<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['cpf']) &&
        !empty($_POST['senha']) && !empty($_POST['confSenha']) && !empty($_POST['cep'])
        && !empty($_POST['rua']) && !empty($_POST['numero']) && !empty($_POST['bairro'])
        && !empty($_POST['cidade']) && !empty($_POST['uf']) && !empty($_POST['dataNascto']) 
         && !empty($_POST['telefone'])
    ) {
        
        //Inclui a class do clinete
        include('../controller/cliente.php');
        //Inclui a class do controller
        include('../controller/controller.php');

        //Inclui a função irá redirecionar o usuário com o erro 
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

        //Objetos das class
        $usuario = new Cliente();
        $verifica = new Controller();

        //Recebe os dados e faz a limpeza dos dados
        $email = strtolower($_POST['email']);
        $nome = $_POST['nome'];
        $cpf =  $verifica->clean($_POST['cpf']);
        $senha = $verifica->clean($_POST['senha']);
        $confSenha = $verifica->clean($_POST['confSenha']);
        $cep = $verifica->clean($_POST['cep']);
        $rua = $_POST['rua'];
        $numero = $verifica->clean($_POST['numero']);
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $tipo = "U";    
        $complemento = ($_POST['complemento'] == null) ? ($complemento = null) : ($complemento = $_POST['complemento']);
        $dtNascimento = $verifica->clean($_POST['dataNascto']);
        $telefone = $verifica->clean($_POST['telefone']);

        /*A função searchUser verifica se o email passado
          já está cadastrado no banco de dados se retornar
          1 o email já está cadastrado e se retornar 0 email
          ainda não cadastrado*/
        $result = $verifica->searchUser($email);
        if ($result[0]['total'] == 0) {
            if ($senha == $confSenha) {
                //A função userRegistration cadastra os dados
                $cadastro = $usuario->userRegistration($email,$senha,$cpf,$nome,
                                      $dtNascimento,$rua,$numero,$complemento,$bairro,
                                      $cidade,$cep,$uf,$tipo,$telefone);
                $msg = "Cadastro realizado com sucesso";
                $url = "//localhost/TCC_2021-main/src/";
                createAlert($msg, $url);
                die();
            } 
            else {
                $msg = "Seu senha está incorreta";
                $url = "//localhost/TCC_2021-main/src/app/view/geral/cadastroUsuario.php";
                createAlert($msg, $url);
                die();
            }
        } 
        else {
            $msg = "Email já cadastrado no sistema";
            $url = "//localhost/TCC_2021-main/src/app/view/geral/cadastroUsuario.php";
            createAlert($msg, $url);
            die();
        }
    }
    else {
        $msg = "Verifique se inseriu todos os dados corretamente";
        $url = "//localhost/TCC_2021-main/src/app/view/geral/cadastroUsuario.php";
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}

