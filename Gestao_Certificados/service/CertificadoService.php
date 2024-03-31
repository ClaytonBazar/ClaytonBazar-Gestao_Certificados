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
        $query = '
        select c.id,e.nome, e.nascimento,i.nome,i.provincia, n.portugues,n.matematica,n.biologia,n.quimica,n.fisica,n.geografia,n.ingles,n.frances,n.historia 
        from certificado c right join Estudante as e on c.id_estudante=e.id 
        join instituicao as i on c.id_instituicao=i.id
        join notas n on c.id_notas=n.id;';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(){

    }

    public function remove(){
        
    }

}

?>