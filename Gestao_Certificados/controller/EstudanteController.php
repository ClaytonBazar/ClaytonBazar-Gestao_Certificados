<?php
   
    require "../../Gestao_Certificados/model/Estudante.php";
    require "../../Gestao_Certificados/service/EstudanteService.php";
    require "../../Gestao_Certificados/conexao/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    //Estudante
    if($acao == 'inserir'){
    $estudante = new Estudante();
    $estudante -> __set('nome', $_POST['nomeAluno']);
    $estudante -> __set('nascimento',$_POST['dataNascimento']);
    $estudante -> __set('anoConclusao', $_POST['anoConclusao']);

    $conexao = new Conexao();
    $estudanteService = new EstudanteService($conexao,$estudante);
    $estudanteService->insert();

    }else if($acao == 'recuperar'){
        
        $estudante = new Estudante();
        $conexao = new Conexao();

        $estudanteService = new EstudanteService($conexao,$tarefa);
        $estudanteService ->recover();

    }

?>