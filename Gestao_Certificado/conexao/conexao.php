<?php

    class Conexao{
        private $host = 'localhost';
        private $dbname = 'gestaocertificado';
        private $user = 'root';
        private $pass = '<3/clay70N';

        public function conect(){
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    $this -> user,
                    $this -> pass
                );

                return $conexao;
                
            }catch(PDOException $e){
                echo '<p>' . $e -> getMessage() . '<p>';
            }
        }
    }

?>