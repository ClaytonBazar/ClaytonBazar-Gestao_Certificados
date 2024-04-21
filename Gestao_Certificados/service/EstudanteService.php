<?php
 session_start();
class EstudanteService{

    private $conexao;
    private  $estudante;
      
   

    function __construct(Conexao $conexao,Estudante $estudante)
    {
        $this -> conexao = $conexao->conect();
        $this -> estudante = $estudante;  
      
    }

    public function insert(){ // create
       
        $query = 'insert into estudante(nome, nascimento,ano_conclusao,id_instituicao) values(:nomeEstudante,:dataNascimento,:anoConclusao,:id_instituicao)';
        $stmt = $this ->conexao->prepare($query);
        $stmt ->bindValue(':nomeEstudante', $this->estudante->__get('nome'));
        $stmt ->bindValue(':dataNascimento', $this->estudante->__get('nascimento'));
        $stmt ->bindValue(':anoConclusao', $this->estudante->__get('anoConclusao'));
        $stmt ->bindValue(':id_instituicao', $_SESSION['id']);

        $stmt->execute();
    }
   
   public function recover(){ //select
    $query = 'select id,nome,nascimento,ano_conclusao from Estudante WHERE id_instituicao = :id_instituicao';
    $stmt = $this ->conexao->prepare($query);
    $stmt ->bindValue(':id_instituicao', $_SESSION['id']);
    $stmt -> execute();
    return $stmt -> fetchAll(PDO::FETCH_OBJ);

   }


   
   public function update(){  //update
   
   }
   
   public function remove(){ //delete
       
   }
}



?>