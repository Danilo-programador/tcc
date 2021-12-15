<?php
   include_once('C:\\xampp\htdocs\TCC_2021-main\src\app/model/database.php');
   class Funcionario extends Database {
       

      public function pegarReserva() {
         $sql = "SELECT reserva.data_nascimento, reserva.horario, usuario.nome,reserva.id_clinica,usuario.id, tipo_vacina.nome as vacina, tipo_vacina.id as idVacina
         FROM tipo_vac_reserva INNER JOIN reserva ON reserva.id = tipo_vac_reserva.id_reserva 
         INNER JOIN usuario ON reserva.id_usuario = usuario.id
         INNER JOIN tipo_vacina ON tipo_vac_reserva.id_tipo_vacina = tipo_vacina.id";
         return $this->executeSql($sql);
      }

      public function inseriVacinação($idVacina,$idFuncionario,$idUsuario,$idClinica,$dataAtual) {
         $sql = "insert into vacinacao(id_vacina,id_funcionario,id_usuario,id_clinica,data_reserva)
                 values ($idVacina,$idFuncionario,$idUsuario,$idClinica,'$dataAtual')";
         return $this->executeSql($sql);
      }
   }

?>