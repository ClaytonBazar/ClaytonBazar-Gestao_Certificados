<?php
     require "../../Gestao_Certificados/model/Certificado.php";
     require "../../Gestao_Certificados/service/CertificadoService.php";
     require "../../Gestao_Certificados/conexao/conexao.php";

     echo '<pre>';
print_r($_POST);
echo '</pre>';

     $certificado = new Certificado();
     $certificado -> __set('numpauta',$_POST['numpauta']);
     $certificado -> __set('ano',$_POST['ano']);
     
     $conexao = new Conexao();
     $certificadoService = new CertificadoService($conexao,$certificado);
     $certificadoService->insert();
?>