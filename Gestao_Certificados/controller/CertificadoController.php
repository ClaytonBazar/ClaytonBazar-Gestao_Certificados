<?php
     require "../../Gestao_Certificados/model/Certificado.php";
     require "../../Gestao_Certificados/service/CertificadoService.php";
     require "../../Gestao_Certificados/conexao/conexao.php";

     $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

     //Estudante
     if($acao == 'inserir'){

     $certificado = new Certificado();
     
     $certificado -> __set('numpauta',$_POST['numpauta']);
     $certificado -> __set('ano',$_POST['ano']);
     
     $conexao = new Conexao();
     $certificadoService = new CertificadoService($conexao,$certificado);
     $certificadoService->insert();
     }else if($acao == 'recuperar'){
        
          $certificado = new Certificado();
          $conexao = new Conexao();
  
          $certificadoService = new CertificadoService($conexao,$certificado);
          $certificado = $certificadoService ->recover();
          
  
      }
?>