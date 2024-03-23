<?php
     require "../../Gestao_Certificados/model/Notas.php";
     require "../../Gestao_Certificados/service/NotasService.php";
     require "../../Gestao_Certificados/conexao/conexao.php";

     $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

     //Notas
     if($acao == 'inserir'){
     $notas = new Notas();
     $notas ->__set('portugues',$_POST['portugues']);
     $notas ->__set('matematica',$_POST['matematica']);
     $notas ->__set('quimica',$_POST['quimica']);
     $notas ->__set('biologia',$_POST['biologia']);
     $notas ->__set('fisica',$_POST['fisica']);
     $notas ->__set('geografia',$_POST['geografia']);
     $notas ->__set('ingles',$_POST['ingles']);
     $notas ->__set('historia',$_POST['historia']);
     $notas ->__set('frances',$_POST['frances']);
     $notas ->__set('filosofia',$_POST['filosofia']);

     $conexao = new Conexao();
     $notasService = new NotasService($conexao,$notas);
     $notasService->insert();
     }