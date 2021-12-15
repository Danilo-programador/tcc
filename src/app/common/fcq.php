<?php
    function createAlert ($msg, $url) {
        echo '<script>',
             'alert("'.$msg.'");',
             'window.location.replace("'.$url.'");',
             '</script>';
    }

    //Pega todos os nomes das vacinas na tabela tipo_vacina
    function retornaNome() {
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/clinica.php');
        $vacina = new clinica();
        $resultado = $vacina->vaccineSearch();
        return $resultado;
    }

    //Pegas as vacinas cadastradas da clinica
    function pegaVacina($idClinica) {
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/clinica.php');
        $vacina = new clinica();
        $result = $vacina->lookForVaccines($idClinica);
        return $result;
    }

    // Take data from clinica location 
    function takeLocation() {
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/clinica.php');
        $location = new clinica();
        $result = $location->lookForLocation();
        return $result;
    }
    
    //Pegas os funcionário cadastradas da clinica
    function getEmployee($idClinica) {
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/clinica.php');
        $funcionario = new clinica();
        $result = $funcionario->searchEmployee($idClinica);
        return $result;
    }

    /*Pega nome das clinicas da mesma uf e cidade que o cliente
      está cadastrado na tabela usuário
    */
    function searchClinics($id) {
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/cliente.php');
        $usuario = new cliente();
        $resultado = $usuario->userAddress($id);
        foreach($resultado as $dados) {
            $uf = $dados['uf'];
            $cidade = $dados['cidade'];
        }
        return $usuario->clinicalSearch($uf,$cidade);
    }

    //Pegas as vacinas que o usuário já tomou
    function historico($idUsuario) {
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/cliente.php');
        //include('/var/www/html/TCC_2021-main/src/app/controller/cliente.php');
        $cliente = new Cliente();
        return $cliente->vacinaSearch($idUsuario);;
    }

    function colocaReserva() {
        include('C:\\xampp\htdocs\TCC_2021-main\src/app/controller/funcionario.php');
        $funcionario = new Funcionario();
        $resultado =  $funcionario->pegarReserva();
        return $resultado;
    }
?>