<?php 

require "../../Gestao_Certificados/model/Instituicao.php";
require "../../Gestao_Certificados/service/InstituicaoService.php";
require "../../Gestao_Certificados/conexao/conexao.php";

//Instituicao

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
if($acao == 'autenticar'){

$instituicao = new Instituicao();
$instituicao -> __set('email',$_POST['email']);
$instituicao -> __set('password',$_POST['password']);

$conexao = new Conexao();

$instituicaoService = new InstituicaoService($conexao,$instituicao);
$retorno = $instituicaoService->autenticar();

echo '<pre>';
print_r($retorno);
echo '<pre>';
}

   ?>