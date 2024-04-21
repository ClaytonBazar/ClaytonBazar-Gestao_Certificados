<?php
session_start();
class NotasService{

    private $conexao;
    private  $notas;
      
   

    function __construct(Conexao $conexao,Notas $notas)
    {
        $this -> conexao = $conexao->conect();
        $this -> notas = $notas;  
      
    }

    public function insert(){
        
        $query = 'insert into notas(id_estudante,portugues,matematica,quimica,biologia,fisica,geografia,ingles,historia,frances,filosofia) values(:id_estudante,:portugues,:matematica,:quimica,:biologia,:fisica,:geografia,:ingles,:historia,:frances,:filosofia)';
        $stmt = $this -> conexao -> prepare($query);
        $stmt -> bindValue(':id_estudante', $_SESSION['id_estudante']);
        $stmt -> bindValue(':portugues', $this->notas->__get('portugues'));
        $stmt -> bindValue(':matematica', $this->notas->__get('matematica'));
        $stmt -> bindValue(':quimica', $this->notas->__get('quimica'));
        $stmt -> bindValue(':biologia', $this->notas->__get('biologia'));
        $stmt -> bindValue(':fisica', $this->notas->__get('fisica'));
        $stmt -> bindValue(':geografia', $this->notas->__get('geografia'));
        $stmt -> bindValue(':ingles', $this->notas->__get('ingles'));
        $stmt -> bindValue(':historia', $this->notas->__get('historia'));
        $stmt -> bindValue(':frances', $this->notas->__get('frances'));
        $stmt -> bindValue(':filosofia', $this->notas->__get('filosofia'));
        $stmt->execute();
    }
   
   public function recover(){
    $query = 'select id from notas where id_estudante = :id_estudante';
    $stmt = $this ->conexao->prepare($query);
    $stmt ->bindValue(':id_estudante', $_SESSION['id_estudante']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
   
   public function update(){
   
   }
   
   public function remove(){
       
   }
}

?>