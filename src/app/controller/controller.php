<?php

include_once("../model/database.php");

class Controller extends Database
{

    //Seleciona uma tabelas do banco de dados
    public function table($tabela)
    {
        try {
            if (isset($tabela) && !empty($tabela)) {
                $sql = "SELECT * FROM " . $tabela . "";
                return $this->executeSql($sql);
            } else {
                $erro = throw new Exception("Informe o nome da tabela");
            }
        } catch (PDOException $erro) {
            echo "Erro:" . $erro->getMessage();
        }
    }

    //Deleta um registro dentro da tabela
    public function delete($tabela, $campo, $id)
    {
        try {
            if (isset($tabela, $campo, $id) && !empty($tabela) && !empty($campo) && empty($id)) {
                $sql = "DELETE FROM " . $tabela . " WHERE " . $campo . " = " . $id;
                return $this->executeSql($sql);
            } else {
                $erro = throw new Exception("Informe o nome da tabela");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    //Faz update de um campo expecifico da tabela
    public function update($tabela, $campo, $conteudo, $id)
    {
        try {
            if (isset($tabela, $campo, $conteudo, $id)) {
                $sql = "UPDATE "  . $tabela . " SET " . $campo . " = '$conteudo'" . " WHERE " . "id = " . $id;
                return $this->executeSql($sql);
            } else {
                $erro =  throw new Exception("Informe todos os conteudos necessários para a alteração");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    /*Faz uma pesquisa de quantos email tem no banco de dados
        do email passado como parametro*/
    public function searchUser($email)
    {
        try {
            $sql = "SELECT COUNT(*) as total FROM usuario WHERE email =  '$email'";
             return $this->executeSql($sql);
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    /*Função que verifica se o email e senha passados
        como parametros estão cadastrados no banco de dados */
    public function login($email, $senha)
    {
        try {
            if (!empty($email) && !empty($senha) && isset($email,$senha)) {
                $sql = "SELECT COUNT(*) AS total,id,email,tipo FROM usuario 
                      WHERE email =  '$email' and senha = md5('$senha')";
                return $this->executeSql($sql);

            } else {
                $erro = throw new Exception("Informe os dados corretamente");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    //Limpa ponto, virgula de cpf,cep  e cnpj
    function clean($valor)
    {
        try {
            if (isset($valor) && !empty($valor)) {
                $valor = trim($valor);
                $valor = str_replace(".", "", $valor);
                $valor = str_replace(",", "", $valor);
                $valor = str_replace("-", "", $valor);
                $valor = str_replace("/", "", $valor);
                $valor = str_replace("(", "", $valor);
                $valor = str_replace(")", "", $valor);
                $valor = str_replace(" ", "", $valor);
                return $valor;
            } else {
                $erro = throw new Exception("Informe um valor");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }

    //verifica senha atual do usuario
    public function checkPassword($idUsuario,$senhaAtual) {
        $sql ="SELECT COUNT(*) as total FROM usuario WHERE id= $idUsuario && senha = md5('$senhaAtual')";
        return $this->executeSql($sql);   
    }

    //Altera senha do usuario
    public function changePassword($idUsuario,$senhaNova) {
        $sql ="UPDATE usuario SET senha =  md5('$senhaNova') WHERE id = $idUsuario && tipo = 'C'";
        return $this->executeSql($sql); 
    }

    public function esqueciSenha($email,$cpf) {
         $sql = "SELECT COUNT(*) as total,id FROM usuario where email = '$email' && cpf = $cpf";
         return $this->executeSql($sql); 
    }
    
    public function trocaSenhaEsqueciSenha($senhaNova,$id) {
        $sql ="UPDATE usuario SET senha =  md5('$senhaNova') WHERE id = $id";
        return $this->executeSql($sql); 
    }
    

}
