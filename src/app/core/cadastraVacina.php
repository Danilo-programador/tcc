<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

    if (!empty($_POST['nomeVacina']) && !empty($_POST['valor']) && !empty($_POST['validade']) &&
        !empty($_POST['lote']) && !empty($_POST['laboratorio'])) {

            include_once('../controller/clinica.php');
            include_once('../controller/controller.php');

            $vacina = new clinica();
            $verifica = new Controller();

            //Recebe o valor do input
            $idTipo = $_POST['nomeVacina'];
            //Pega a primeira letra da string e transforma em inteiro
            $idTipo = intval(substr($idTipo,0,1));
            $valor = floatval($_POST['valor']);
            $validade = $verifica->clean($_POST['validade']);
            $lote = $_POST['lote'];
            $laboratorio = $_POST['laboratorio'];
            $idC = $_SESSION['usuario'];
            $idClinica = $idC['id'];

            //Objeto da classe clinica

            $result = $vacina->verificaVacExistente($idTipo,$idClinica);
            if($result[0]['total'] == 0) {
                $cadastro = $vacina->registerVaccine($idTipo,$idClinica,$valor,$lote,$validade,$laboratorio);
                $msg = "Cadastro realizado com sucesso";
                $url = "//localhost/TCC_2021-main/src/app/view/clinica/cadastro/cadastroVacina.php";
                createAlert($msg, $url);
                die();
            }
            else {
                $msg = "Vacina já cadastrada no sistema! Você não pode cadastrar essa vacina";
                $url = "//localhost/TCC_2021-main/src/app/view/clinica/cadastro/cadastroVacina.php";
                createAlert($msg, $url);
                die();
            }
    }
    else {
        $msg = "Verifique se inseriu todos os dados corretamente";
        $url = "//localhost/TCC_2021-main/src/app/view/clinica/cadastro/cadastroVacina.php";
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}
