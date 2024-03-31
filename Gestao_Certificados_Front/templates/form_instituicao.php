

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
                    <li><a href="../templates/listagem_instituicao.php">Certificados</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </nav>
        </header>

    <div class="front">


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
                    <select>
                        <option value="Escola Primaria">Escola Primaria</option>
                        <option value="Escola Secundaria">Escola Secundaria</option>
                    </select>
                </div>
                <input type="submit" value="Enviar">

            </fieldset>
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
                2024 <a href="../templates/index.php">Escolar Certificados</a> - Todos os direitos reservados pelo MINEDH
            </p>
     </footer>
</div>
</body>
</html>