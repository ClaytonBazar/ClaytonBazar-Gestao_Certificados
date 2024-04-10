<?php

require "../../Gestao_Certificados/model/Instituicao.php";
require "../../Gestao_Certificados/service/InstituicaoService.php";
require "../../Gestao_Certificados/conexao/conexao.php";

//Instituicao

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
if($acao == 'inserir'){

$instituicao = new Instituicao();
$instituicao -> __set('nomeInstituicao', $_POST['nomeInstituicao']);
$instituicao -> __set('provincia',$_POST['provincia']);
$instituicao -> __set('email',$_POST['email']);
$instituicao -> __set('password',$_POST['password']);

$conexao = new Conexao();

$instituicaoService = new InstituicaoService($conexao,$instituicao);
$instituicaoService->insert();



}else if($acao == 'recuperar'){
        
    $instituicao = new Instituicao();
    $conexao = new Conexao();

    $instituicaoService = new InstituicaoService($conexao,$instituicao);
   $instituicao = $instituicaoService ->recover();

} else if($acao == 'autenticar'){

    $instituicao = new Instituicao();
    $instituicao -> __set('email',$_POST['email']);
    $instituicao -> __set('password',$_POST['password']);
    
    $conexao = new Conexao();
    
    $instituicaoService = new InstituicaoService($conexao,$instituicao);



    $retorno = $instituicaoService->autenticar();
    
    if($instituicao->__get('id') != '' && $instituicao->__get('nome_instituicao')){

        session_start();

        $_SESSION['id'] = $instituicao->__get('id');
        $_SESSION['nome_instituicao'] = $instituicao->__get('nome_instituicao');

        header('Location: ../templates/index.php');
        
     
    }else{
       echo 'Dados invalidos';
    }

}

?>