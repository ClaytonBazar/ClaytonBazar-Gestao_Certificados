<?php
   
    require "../../Gestao_Certificados/model/Estudante.php";
    require "../../Gestao_Certificados/service/EstudanteService.php";
    require "../../Gestao_Certificados/conexao/conexao.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //Estudante
    $estudante = new Estudante();
    $estudante -> __set('nome', $_POST['nomeAluno']);
    $estudante -> __set('nascimento',$_POST['dataNascimento']);
    $estudante -> __set('anoConclusao', $_POST['anoConclusao']);

    $conexao = new Conexao();
    $estudanteService = new EstudanteService($conexao,$estudante);
    $estudanteService->insert();

    
echo '<pre>';
print_r($estudanteService);
echo '</pre>';

?>