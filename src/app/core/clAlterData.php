<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['cpf']) && !empty($_POST['cep'])
           && !empty($_POST['rua']) && !empty($_POST['numero']) && !empty($_POST['bairro'])
           && !empty($_POST['cidade']) && !empty($_POST['uf']) && !empty($_POST['complemento'])
          && !empty($_POST['dataNascto'])  && !empty($_POST['telefone'])) {
            include("../../../model/conexao.php");
        }
        else {
            
        }
    }
    else {
        header("location: //localhost/TCC_2021-main/src/app/view/geral/login.php"); 
    }
?>