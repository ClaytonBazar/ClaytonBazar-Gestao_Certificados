<?php

    class Conexao{
        private $server = 'CLAYTON';
        private $dbname = 'certificados';
        private $user = 'root';
        private $pass = '<3/clay70N';

        public function conect(){
            try {
                $conexao = new PDO(
                    "sqlsrv:server=$this->server;dbname=$this->dbname",
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