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
                    <li><a href="../templates/index.php">Home</a></li>
                    <li><a href="../templates/form_instituicao.php">Instituicao</a></li>
                    <li><a href="../templates/form_estudante.php">Estudantes</a></li>
                    <li><a href="../templates/form_estudante.php">Notas</a></li>
                    <li><a href="../templates/listagem_certificado.php">Certificados</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </nav>
        </header>
<div class="front">
    
        <form action="../controller/CertificadoController.php?acao=inserir">
    
    
        </form>
</div>
    <aside>
        <h3>Direccao do Ministerio</h3>
        <section>
            <div>         
            <img src="" alt="">
            <h4>Carmelita Namashulua</h4>
            <p>Ministra da Educacao e Desenvolvimento Humano</p>
            </div>
        </section>
        <section>
            <div>      
            <img src="" alt="">
            <h4>Manuel Bazo</h4>
            <p>Vice-Ministro da Educacao e Desenvolvimento Humano</p>
            </div>
        </section>
        <section>
            <div>   
            <img src="" alt="">
            <h4>Artur Dondo</h4>
            <p>Secretario Permanente</p>
            </div>
        </section>
    </aside>


    <footer>
            <p>
            <a href="../templates/index.php">Home</a>
            <a href="../templates/form_instituicao.php">Instituicao</a>
            <a href="../templates/form_estudante.php">Estudantes</a>
            <a href="../templates/form_notas.php">Notas</a>
            <a href="../templates/listagem_certificado.php">Certificados</a>
            <a href="">Sobre</a>
            </p>

            <p>
                2024 <a href="index.php">Escolar Certificados</a> - Todos os direitos reservados pelo MINEDH
            </p>
     </footer>
     </div>
</body>
</html>