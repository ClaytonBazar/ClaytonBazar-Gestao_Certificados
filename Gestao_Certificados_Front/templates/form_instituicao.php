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
        <header> 
            <div id="logo"><a href="">Museu Nacional</a></div>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Instituicao</a></li>
                    <li><a href="">Estudantes</a></li>
                    <li><a href="">Notas</a></li>
                    <li><a href="">Certificados</a></li>
                    <li><a href="">Sobre</a></li>
                </ul>
            </nav>
        </header>

    <form method="post" action="../controller/InstituicaoController.php?acao=inserir">
        <div>
            <label for="">Nome da Instituicao</label>
            <input type="text" name="nomeInstituicao" id="">
            <label for="">Provincia</label>
            <input type="text" name="provincia" id="">
            <input type="submit" value="Enviar">
        </div>
    </form>
</div>
</body>
</html>