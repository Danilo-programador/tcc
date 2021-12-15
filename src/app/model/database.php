<?php

class Database {
      private $dbname = "carteira_vacina";
      private $host = "localhost";
      private $user = "root";
      private $password = "Mariana271117";
      private $conn = null;

      private $erroSql;
      private $result ; 
       
       public function __construct() {
           
       }
 
        private function connection() {
           try {
               // Create object connection
              $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
                // set the PDO error mode to exception
              $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $erro) {
                // Get the error and put into erroSql
              $this->erroSql = $erro->getMessage();
            }
        }

        private function disconnection() {
            try{
                // Verify if the connection is open
                if($this->conn != null) {
                    // Close the connection
                    $this->conn = null;
                }
                return true; 
            } catch(PDOException $erro) {
                // Get the error and put into erroSql
                $this->erroSql = $erro->getMessage();
                return false;
            }
        }

        public function executeSql($sql) {
            try {
                // Call connection
                $this->connection();
                // Prepare statement
                $stmt = $this->conn->prepare($sql); 
                // Execute statement
                $stmt->execute();
                // Set the resulting array to associative
                $this->result = $stmt->fetchAll();//setFetchMode(PDO::FETCH_ASSOC);
                return $this->getData();
            } catch(PDOException $erro) {
                // Get the error and put into erroSql
                $this->erroSql = $erro->getMessage();
                return false;
            } finally {
                // Call disconnection
                $this->disconnection();
            }
        }
        
        private function getData() {
            return $this->result;
        }

        public function getErro() {
            return $this->erroSql;
        }
}

?>


