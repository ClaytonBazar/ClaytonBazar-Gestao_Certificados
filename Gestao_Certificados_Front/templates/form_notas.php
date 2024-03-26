<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

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

    <form method="post" action="../controller/Notascontroller.php?acao=inserir">
        <div>
            <label for="">Portugues</label>
            <input type="text" name="portugues" id="">

            <label for="">Matematica</label>
            <input type="text" name="matematica" id="">

            <label for="">Quimica</label>
            <input type="text" name="quimica" id="">

            <label for="">Biologia</label>
            <input type="text" name="biologia" id="">

            <label for="">Fisica</label>
            <input type="text" name="fisica" id="">

            <label for="">Geografia</label>
            <input type="text" name="geografia" id="">

            <label for="">Ingles</label>
            <input type="text" name="ingles" id="">

            <label for="">Historia</label>
            <input type="text" name="historia" id="">

            <label for="">Frances</label>
            <input type="text" name="frances" id="">

            <label for="">Filosofia</label>
            <input type="text" name="filosofia" id="">
            
            <input type="submit" value="Enviar">
        </div>
    </form>
</div>
</body>
</html>