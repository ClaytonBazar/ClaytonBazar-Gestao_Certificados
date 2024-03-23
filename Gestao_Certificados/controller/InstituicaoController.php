<?php

require "../../Gestao_Certificados/model/Instituicao.php";
require "../../Gestao_Certificados/service/InstituicaoService.php";
require "../../Gestao_Certificados/conexao/conexao.php";

echo '<pre>';
print_r($_POST);
echo '</pre>';
//Instituicao
$instituicao = new Instituicao();
$instituicao -> __set('nomeInstituicao', $_POST['nomeInstituicao']);
$instituicao -> __set('provincia',$_POST['provincia']);

$conexao = new Conexao();

$instituicaoService = new InstituicaoService($conexao,$instituicao);
$instituicaoService->insert();

header('Location:../template/form_instituicao.php?inclusao=1')
?>