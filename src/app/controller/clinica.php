<?php
   include_once('C:\\xampp\htdocs\TCC_2021-main\src\app/model/database.php');
   class clinica extends Database{
        

        //Função que cadastra a clinica
        public function clinicRegistration($email,$senha,$nome,$rua,$numero,
        $compl,$bairro,$cidade,$cep,$uf,$tipo,$telefone) {
        try {
            $sql = "INSERT INTO usuario(email,senha,telefone,tipo,nome,rua,
                                         numero,compl,bairro,cidade,cep,uf) 
                                         VALUES ('$email',md5('$senha'),'$telefone','$tipo',
                                                '$nome', '$rua','$numero','$compl'
                                                ,'$bairro','$cidade',$cep,'$uf')";
            $this->executeSql($sql);
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
      }

      //Função que cadastra vacina
      public function registerVaccine($idTipo,$idClinica,$valor,$lote,$validade,$laboratorio) {
          $sql = "INSERT INTO vacina(valor,lote,validade,laboratorio,id_tipo_vacina,id_clinica)
                            VALUES($valor,'$lote',$validade,'$laboratorio',$idTipo,$idClinica)";
          return $this->executeSql($sql);
      }

       //Verifica se a vacina foi cadastrada na tabela vacina
       public function verificaVacExistente($idTipo,$idClinica) {
        $sql = "SELECT COUNT(*) as total FROM vacina WHERE id_tipo_vacina = $idTipo && id_clinica = $idClinica";
        return $this->executeSql($sql);
       }

      //Busca os nomes das vacinas na tabela tipo_vacina
      public function vaccineSearch() {
          $sql = "SELECT id,nome FROM tipo_vacina";
          return $this->executeSql($sql);
      }

      //Cadastra funcionario
      public function registerEmployee($nome,$email,$senha,$cpf,$coren,$telefone,$idClinica,$tipo) {
          $sql = "INSERT INTO usuario (email,senha,telefone,cpf,tipo,nome,coren,idClinica)
                         VALUES('$email',md5('$senha'),'$telefone','$cpf','$tipo','$nome',$coren,$idClinica)";
          $this->executeSql($sql);
      }
      
      //Verifica se o funcinário já está cadastrada na tabela usuario

      public function verificaFucExistente($email,$senha,$coren,$idClinica) {
        $sql = "SELECT COUNT(*) as total FROM usuario WHERE email = '$email' && senha = md5('$senha') && coren = $coren && idClinica = $idClinica";
        return $this->executeSql($sql);
      }

      //Busca as vacinas cadastradas 
      public function lookForVaccines($idClinica) {
         $sql = "SELECT tipo_vacina.nome,vacina.id,vacina.valor,vacina.lote,vacina.laboratorio,vacina.validade FROM vacina 
                 INNER JOIN tipo_vacina ON vacina.id_tipo_vacina = tipo_vacina.id WHERE vacina.id_clinica = $idClinica";
         return $this->executeSql($sql);
      }

      // Search for location adress
      public function lookForLocation() {
        $sql = "SELECT nome, rua, numero, bairro, cidade, uf FROM usuario 
                WHERE tipo = 'C'";
        return $this->executeSql($sql);
     }

      //busca funcionário cadastrado na clinica

      
      public function searchEmployee($idClinica) {
          $sql = "select id,nome,email,telefone,coren from usuario where tipo = 'F' && idClinica = $idClinica";
          return $this->executeSql($sql);
      }

      //deleta a vacina da tabela vacina
      public function excludeVaccine($idVacina,$idClinica) {
         $sql ="DELETE FROM vacina WHERE id = $idVacina && id_clinica = $idClinica";
         return $this->executeSql($sql);
      }

      //deleta funcionario da tabela usuario
      public function excludeEmployee($idFuncionario,$idClinica) {
        $sql ="DELETE FROM usuario WHERE tipo = 'F' && id = $idFuncionario && idClinica = $idClinica";
        return $this->executeSql($sql);
     }
}
