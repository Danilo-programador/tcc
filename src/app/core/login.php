<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["email"]) && !empty($_POST['senha'])) {
        $email =  strtolower($_POST['email']);
        $senha = $_POST['senha'];

        //Inclui a função irá redirecionar o usuário com o erro 
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

        include('../controller/controller.php');
        
        //Objeto
        $logar = new Controller();

        //
        $resultado = $logar->login($email,$senha);

        foreach($resultado as $dados) {
            $row = $dados['total'];
            $id = $dados['id'];
            $tipo = $dados['tipo'];
            $email = $dados['email'];
        }
        if($row == 1) {
            session_start();
            switch ($tipo) {
    
                case "U": 
                    $_SESSION['usuario'] = ["tipo"=>$tipo,"id"=>$id];
                    header("location: //localhost/TCC_2021-main/src/app/view/cliente/painelCliente.php"); 
                    die();
                case "F":
                    $_SESSION['usuario'] = ["tipo"=>$tipo,"id"=>$id];
                    header("location: //localhost/TCC_2021-main/src/app/view/funcionario/painelFuncionario.php"); 
                    die();
                case "A":
                    $_SESSION['usuario'] = ["tipo"=>$tipo,"id"=>$id];
                    header("location: //localhost/TCC_2021-main/src/app/view/administrador/painelAdm.php"); 
                    die();

                case "C":
                    $_SESSION['usuario'] = ["tipo"=>$tipo,"id"=>$id];
                    header("location: //localhost/TCC_2021-main/src/app/view/clinica/cadastro/cadastroVacina.php"); 
                    die();
            }
        }
        else {
            $msg = "E-mail ou senha incorreto";
            $url = "//localhost/TCC_2021-main/src/";
            createAlert($msg, $url);
            die();
        }
    }
    else {
        $msg = "Preencha os dados do login";
        $url = "//localhost/TCC_2021-main/src/";
        createAlert($msg, $url);
        die();
    }
 }
 else {
    header("location: //localhost/TCC_2021-main/src/"); 
 }

?> 