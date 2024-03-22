<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1){ ?>
<div style="background: green;color:white;"> <h5>Instituicao inserida com sucesso</h5>  
<? } ?>
    <form method="post" action="../controller/InstituicaoController.php">

    </div>
        <div>
            <label for="">Nome da Instituicao</label>
            <input type="text" name="nomeInstituicao" id="">
            <label for="">Provincia</label>
            <input type="text" name="provincia" id="">
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>