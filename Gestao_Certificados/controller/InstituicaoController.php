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

$conexao = new Conexao();

$instituicaoService = new InstituicaoService($conexao,$instituicao);
$instituicaoService->insert();



}else if($acao == 'recuperar'){
        
    $instituicao = new Instituicao();
    $conexao = new Conexao();

    $instituicaoService = new InstituicaoService($conexao,$instituicao);
   $instituicao = $instituicaoService ->recover();

}

?>