<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form_style.css">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <img src="../img/download.png" alt="">

        <form action="../controller/InstituicaoController.php">
            <div>
                <input type="text" name="email" id="email" placeholder="Digite o Nome da Instituicao">
            </div>
            <div>
                <input type="password" name="senha" id="email" placeholder="Digite a senha">
            </div>
            <div>
                <input class="submit" type="submit" Value="Logar">
            </div>

            <div>
                <button><a href="formularios.html">Sign in</a></button>
            </div>
        </form>
    </div>


</body>
</html>