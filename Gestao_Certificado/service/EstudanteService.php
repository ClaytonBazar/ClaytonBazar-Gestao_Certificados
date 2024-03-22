<?php

class EstudanteService{

    private $conexao;
    private  $estudante;
      
   

    function __construct(Conexao $conexao,Estudante $estudante)
    {
        $this -> conexao = $conexao->conect();
        $this -> estudante = $estudante;  
      
    }

    public function insert(){ // create
        $query = 'insert into estudante(nome, nascimento, ano_conclusao, numpauta,is_certificado,id_instituicao) values(:nomeEstudante,:dataNascimento,:anoConclusao,:numPauta,:idCertificado,:idInstituicao)';
        $stmt = $this ->conexao->prepare($query);
        $stmt ->bindValue(':nomeEstudante', $this->estudante->__get('nome'));
        $stmt ->bindValue(':dataNascimento', $this->estudante->__get('nascimento'));
        $stmt ->bindValue(':anoConclusao', $this->estudante->__get('anoConclusao'));
        $stmt ->bindValue(':numPauta', $this->estudante->__get('numPauta'));
        $stmt ->bindValue(':idCertificado', $this->estudante->__get('idCertificado'));
        $stmt ->bindValue(':idInstituicao', $this->estudante->__get('idInstituicao'));
        $stmt->execute();
    }
   
   public function recover(){ //read
   
   }
   
   public function update(){  //update
   
   }
   
   public function remove(){ //delete
       
   }
}

?>