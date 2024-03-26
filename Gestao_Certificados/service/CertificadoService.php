<?php

class CertificadoService{
    private $conexao;
    private  $certificado;
      
   

    function __construct(Conexao $conexao,Certificado $certificado)
    {
        $this -> conexao = $conexao->conect();
        $this -> certificado = $certificado;  
      
    }

    public function insert(){
        
    }

    public function recover(){

    }

    public function update(){

    }

    public function remove(){
        
    }

}

?>