<?php

class InstituicaoService{

    private $conexao;
    private  $instituicao;
      
   

    function __construct(Conexao $conexao,Instituicao $instituicao)
    {
        $this -> conexao = $conexao->conect();
        $this -> instituicao = $instituicao;  
      
    }


    public function insert(){
        $query = 'insert into instituicao(nome_instituicao,provincia) values(:nomeInstituicao,:provincia)';
        $stmt = $this ->conexao->prepare($query);
        $stmt ->bindValue(':nomeInstituicao', $this->instituicao->__get('nomeInstituicao'));
        $stmt ->bindValue(':provincia', $this->instituicao->__get('provincia'));
        $stmt->execute();
    }
   
   public function recover(){
        $query = 'select nome_instituicao,provincia from instituicao';
        $stmt = $this ->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
   
   public function update(){
   
   }
   
   public function remove(){
       
   }
}

?>