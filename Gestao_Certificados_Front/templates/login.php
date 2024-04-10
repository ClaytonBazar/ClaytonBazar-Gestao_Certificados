<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form_style.css">
    <title>Login</title>
</head>
<body>
    <div id="container">
        <img src="../img/download.png" alt="">

        <form method="POST" action = "../controller/InstituicaoController.php?acao=autenticar">
            <div>
                <input type="text" name="email" id="" placeholder="Digite o Email da Instituicao">
            </div>
            <div>
                <input type="password" name="password" id="" placeholder="Digite a senha">
            </div>
            <div>
            <button type="submit"><a href="">Log in</a></button>
            
            </div>
    <br>
            <div>
                <button><a href="form_instituicao.php">Sign in</a></button>
            </div>
        </form>
    </div>


</body>
</html>