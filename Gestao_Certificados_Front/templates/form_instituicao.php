

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>
<body>

<div id="container">


    <div class=" sign-in">


        <form method="post" action="../controller/InstituicaoController.php?acao=inserir">
            <fieldset id="instituicao">
                <Legend>Nova Instituicao</Legend>
                <div>
                    <label for="">Nome da Instituicao</label>
                    <input type="text" name="nomeInstituicao" id="">
                    <div>
                </div>
                <label for="">Provincia</label>
                <input type="text" name="provincia" id="">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                </div>
                <div>
                    <label for="password">password</label>
                    <input type="password" name="password" id="">
                </div>
                <input type="submit" value="Enviar">

            </fieldset>
        </form>
    </div>
  
</div>
</body>
</html>