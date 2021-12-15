<?php
include_once('C:\\xampp\htdocs\TCC_2021-main\src\app/model/database.php');
   class Adm extends Database {
      //Busca dados da clinica
      public function searchClinicData() {
        try {
            $sql = "SELECT id,nome,email,telefone FROM usuario WHERE tipo = 'C'";
            return $this->executeSql($sql);
        } 
        catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage('');
        }
      }
   }
?>