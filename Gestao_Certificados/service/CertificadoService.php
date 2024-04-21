<?php
session_start();
class CertificadoService{
    private $conexao;
    private  $certificado;
      
   

    function __construct(Conexao $conexao,Certificado $certificado)
    {
        $this -> conexao = $conexao->conect();
        $this -> certificado = $certificado;  
      
    }

    public function insert(){
        $query = 'insert into certificado(id_estudante,id_instituicao,id_notas) values(:id_estudante,:id_instituicao,:id_notas)';
        $stmt = $this ->conexao->prepare($query);
        $stmt ->bindValue(':id_estudante',$_SESSION['id_estudante'] );
        $stmt ->bindValue(':id_instituicao',$_SESSION['id']);
        $stmt ->bindValue(':email',$_SESSION['id_notas']);

    }

    public function recover(){
        $query = 'select * from certificado inner join Estudante on certificado.id_estudante = Estudante.id inner join instituicao on certificado.id_instituicao = instituicao.id inner join notas on certificado.id_notas = notas.id where certificado.id_instituicao = :id_instituicao order by Estudante.nome;';
        
        $stmt = $this->conexao->prepare($query);
        $stmt ->bindValue(':id_instituicao', $_SESSION['id']);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function recoverById(){
        $query = 'select * from certificado inner join Estudante on certificado.id_estudante = Estudante.id inner join instituicao on certificado.id_instituicao = instituicao.id inner join notas on certificado.id_notas = notas.id where certificado.id_estudante= :id_estudant;';
        
        $stmt = $this->conexao->prepare($query);
        $stmt ->bindValue(':id_estudant', $_SESSION['id_estudant']);
        //$stmt -> bindValue(':id_estudante', $_SESSION['id_estudante']);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(){

    }

    public function remove(){
        
    }

}

?>