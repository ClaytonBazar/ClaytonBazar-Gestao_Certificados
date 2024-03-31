<?php

    class Conexao{
        private $serverName = "CLAYTON";
        private $conectionOptions = "certificados";
        private $user = '';
        private $pass = '';

        public function conect(){
            try {
                $conexao = new PDO(
                    "sqlsrv:server=$this->serverName;Database=$this->conectionOptions",
                    $this->user,
                    $this ->pass);

                

                    $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                return $conexao;
                
                
            }catch(PDOException $e){
                die(print_r($e -> getMessage()));
            }
        }
    }

?>