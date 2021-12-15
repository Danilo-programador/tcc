<?php
include_once('C:\\xampp\htdocs\TCC_2021-main\src\app/model/database.php');
class Cliente extends Database
{
    public function userRegistration($email,$senha,$cpf,$nome,$dtNascimento,$rua,$numero,
        $compl,$bairro,$cidade,$cep,$uf,$tipo,$telefone) {
        try {
            $sql = "INSERT INTO usuario(email,senha,telefone,cpf,tipo,nome,dt_nascimento,rua,
                                         numero,compl,bairro,cidade,cep,uf) 
                                         VALUES ('$email',md5('$senha'),'$telefone','$cpf','$tipo',
                                                '$nome',$dtNascimento, '$rua','$numero','$compl'
                                                ,'$bairro','$cidade',$cep,'$uf')";
            return $this->executeSql($sql);
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    //Pega das uf e cidade do usuário
    public function userAddress($id) {
        $sql = "SELECT uf,cidade FROM usuario WHERE id = $id && tipo = 'U'";
        return $this->executeSql($sql);
    }
    
    //busca dados clinica
    public function clinicalSearch($uf,$cidade) {
        $sql = "SELECT id,nome FROM usuario WHERE tipo = 'C' && uf = '$uf' && cidade = '$cidade'";
        return $this->executeSql($sql);
    }

    //busca dados clinica
    public function vacinaSearch($idUsuario) {
        $sql = "select tv.nome, tv.descricao, v.data_reserva from vacinacao v 
                inner join tipo_vacina tv on v.id_vacina = tv.id 
                where v.id_usuario = $idUsuario";

        return $this->executeSql($sql);
    }

    //Faz a reserva de vacina
    public function vaccineReserve($data,$horario,$idUsuario,$idClinica) {
        $sql = "INSERT INTO reserva(data_nascimento,horario,id_usuario,id_clinica)
                VALUES ($data,'$horario',$idUsuario,$idClinica)";
        return $this->executeSql($sql);
    }

    //cadastras reserva na tabela tipo_vac reserva

    public function reserveTypeRegister($idReserva,$idClinica,$idTipo) {
        $sql = "INSERT INTO tipo_vac_reserva(id_tipo_vacina,id_reserva,id_clinica)
        VALUES ($idTipo,$idReserva,$idClinica)";
        return $this->executeSql($sql);
    }

    //Pega o ultimo id cadastrado na tabela reserva
    public function searchLastReservation() {
        $sql = "SELECT MAX(id) as id FROM reserva";
        return $this->executeSql($sql);
    }


    /*public function editingdata($nome,$email,$telefone,$cep,$rua,$numero,
                               $bairro,$cidade,$uf,$compl) {
        try {
            if (
                !empty($nome) && !empty($email) && !empty($telefone) && !empty($cep) &&
                !empty($rua) && !empty($numero) && !empty($bairro) && !empty($cidade) &&
                !empty($uf) && !empty($compl)
            ) {
                $sql = $this->pdo->query("UPDATE usuario SET email = '$email', telefone = '$telefone',
      nome = '$nome', rua = '$rua', numero = '$numero', compl = $compl,
      bairro = '$bairro', cidade = '$cidade', cep = $cep, uf = '$uf'");
                if ($sql == true) {
                    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
                } else {
                    $erro = throw new Exception("Dados não encontrados");
                }
            } else {
                $erro = throw new Exception("Informações incompletas");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
        return $resultado;
    }*/    
}
