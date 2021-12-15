<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Inclui a função irá redirecionar o usuário com o erro 
    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

    if (!empty($_POST['nome']) && !empty($_POST['email']) &&
        !empty($_POST['senha']) && !empty($_POST['cep']) && !empty($_POST['rua']) 
        && !empty($_POST['numero']) && !empty($_POST['bairro'])
        && !empty($_POST['cidade']) && !empty($_POST['uf']) && !empty($_POST['telefone'])) {
            
        //Inclui a class do clinete
        include('../controller/clinica.php');
        //Inclui a class do controller
        include('../controller/controller.php');

        //Objetos das class
        $usuario = new clinica();
        $verifica = new Controller();

        //Recebe os dados e faz a limpeza dos dados
        $email = strtolower($_POST['email']);
        $nome = $_POST['nome'];
        $senha = $verifica->clean($_POST['senha']);
        $cep = $verifica->clean($_POST['cep']);
        $rua = $_POST['rua'];
        $numero = $verifica->clean($_POST['numero']);
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $tipo = "C";
        $complemento = ($_POST['complemento'] == null) ? ($complemento = null) : ($complemento = $_POST['complemento']);
        $telefone = $verifica->clean($_POST['telefone']);

        /*A função searchUser verifica se o email passado
          já está cadastrado no banco de dados se retornar
          1 o email já está cadastrado e se retornar 0 email
          ainda não cadastrado*/
        $result = $verifica->searchUser($email);
        if($result[0]['total'] == 0) {
            //A função clinicRegistration cadastra os dados
            $cadastro = $usuario->clinicRegistration($email,$senha,$nome,$rua,$numero,
            $complemento,$bairro,$cidade,$cep,$uf,$tipo,$telefone);
            $msg = "Cadastro realizado com sucesso";
            $url = "//localhost/TCC_2021-main/src/app/view/administrador/painelAdm.php";
            createAlert($msg, $url);
            die();
        } 
        else {
            $msg = "Email já cadastrado no sitema";
            $url = "//localhost/TCC_2021-main/src/app/view/administrador/painelAdm.php";
            createAlert($msg, $url);
            die();
        }
    } 
    else {
        $msg = "Verifique se inseriu todos os dados corretamente";
        $url = "//localhost/TCC_2021-main/src/app/view/administrador/painelAdm.php";
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}
