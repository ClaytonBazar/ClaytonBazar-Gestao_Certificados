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
        $query = 'insert into instituicao(nome_instituicao,provincia,email,password) values(:nomeInstituicao,:provincia,:email,:password)';
        $stmt = $this ->conexao->prepare($query);
        $stmt ->bindValue(':nomeInstituicao', $this->instituicao->__get('nomeInstituicao'));
        $stmt ->bindValue(':provincia', $this->instituicao->__get('provincia'));
        $stmt ->bindValue(':email', $this->instituicao->__get('email'));
        $stmt ->bindValue(':password', $this->instituicao->__get('password'));
        $stmt->execute();
    }
   
   public function recover(){
        $query = 'select nome_instituicao,provincia from instituicao';
        $stmt = $this ->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
   }

    
   public function autenticar(){
    $query = "select id, nome_instituicao, email from instituicao where email = :email and password = :password";
    $stmt = $this->conexao->prepare($query);
    $stmt ->bindValue(':email', $this->instituicao->__get('email'));
    $stmt ->bindValue(':password', $this->instituicao->__get('password'));
    $stmt->execute();

    $instituicao = $stmt ->fetch(\PDO::FETCH_ASSOC);

    if($instituicao['id'] != '' && $instituicao['nome_instituicao'] != ''){
     $this ->instituicao->__set('id', $instituicao['id']);
    $this ->instituicao->__set('nome_instituicao', $instituicao['nome_instituicao']);
    }else{
        header('Location: ../../Gestao_Certificados_Front/templates/login.php');
    }
    
    return $this->instituicao;

}

   
   public function update(){
   
   }
   
   public function remove(){
       
   }
}

?>