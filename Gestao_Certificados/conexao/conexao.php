<?php

    class Conexao{
        private $server = 'CLAYTON';
        private $dbname = 'certificados';
        private $user = '';
        private $pass = '';

        public function conect(){
            try {
                $conexao = new PDO(
                    "sqlsrv:server=$this->server;Database=$this->dbname",
                    $this -> user,
                    $this -> pass
                    
                );

                return $conexao;
                echo '<p>conectado com sucesso<p>';
                
            }catch(PDOException $e){
                echo '<p>' . $e -> getMessage() . '<p>';
            }
        }
    }

?>