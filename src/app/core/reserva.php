<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Inclui a função irá redirecionar o usuário com o erro 
    include('C:\\xampp\htdocs\TCC_2021-main\src/app/common/fcq.php');

    if (!empty($_POST['nomeVacina']) && !empty($_POST['nomeClinica']) && 
        !empty($_POST['dataReserva']) && !empty($_POST['horario'])) {

        include('../controller/cliente.php');
        include('../controller/controller.php');
        
        //objetos da class
        $reserva = new Cliente();
        $verifica = new Controller();

        //Recebe o valor do input da vacina
        $idTipo = $_POST['nomeVacina'];
        //Pega a primeira letra da string e transforma em inteiro
        $idTipo = intval(substr($idTipo,0,1));

         //Recebe o valor do nome clinica
         $idClinica = $_POST['nomeClinica'];
         //Pega a primeira letra da string e transforma em inteiro
         $idClinica = substr($idTipo,0,1);

         $dataReserva = $verifica->clean($_POST['dataReserva']);
         $horario = $_POST['horario'];

         //recebe o id do usuário
         $idU = $_SESSION['usuario'];
         $idUsuario = intval($idU['id']);
         
         if($idUsuario != null) {
            //Faz a verificação se já existe uma reserva 
            $reserva->vaccineReserve($dataReserva,$horario,$idUsuario,$idClinica,$idTipo);
            $idR = $reserva->searchLastReservation();
            if($idR[0]['id'] != null) {
                $idReserva = $idR[0]['id'];
                $reserva->reserveTypeRegister($idReserva,$idClinica,$idTipo);
                $msg = "Reserva realizada com sucesso";
                $url = "//localhost/TCC_2021-main/src/app/view/cliente/reserva/reserva.php";
                createAlert($msg, $url);
                die();
            }
         }
         else {
            $msg = "Não foi possivel realizar a reserva";
            $url = "//localhost/TCC_2021-main/src/app/view/cliente/reserva/reserva.php";
            createAlert($msg, $url);
            die();
         }
    } 
    else {
        $msg = "Verifique se inseriu todos os dados corretamente da reserva";
        $url = "//localhost/TCC_2021-main/src/app/view/administrador/painelAdm.php";
        createAlert($msg, $url);
        die();
    }
} 
else {
    header("location: //localhost/TCC_2021-main/src/");
}