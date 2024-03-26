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
    
        <form method="post" action="../controller/Estudantecontroller.php?acao=inserir">>
            <fieldset>
                <Legend>Dados do estudante</Legend>
                <div>
                    <label for="nomeAluno">Nome do Aluno</label>
                    <input type="text" name="nomeAluno" id="nomeAluno" placeholder="Ex: Ernesto da Silva">
                </div>
                <div>
                    <label for="dataNascimento">Data de Nascimento</label>
                    <input type="date" name="dataNascimento" id="dataNascimento" value="aaaa-mm-dd">
                </div>
                <div>
                    <label for="anoConclusao">ano de Conclusao</label>
                    <input type="text" name="anoConclusao" id="anoConclusao" placeholder="Ex: 2021">
                </div>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        <form method="post" action="../controller/Notascontroller.php?acao=inserir">
            <fieldset>
                <legend>Notas do Estudante</legend>
                <div>
                    <label for="">Portugues</label>
                    <input type="text" name="portugues" id="" placeholder="ex: 15">
                </div>
    
                <div>
                    <label for="">Matematica</label>
                    <input type="text" name="matematica" id="">
                </div>
    
                <div>
                    <label for="">Quimica</label>
                    <input type="text" name="quimica" id="">
                </div>
    
                <div>
                    <label for="">Biologia</label>
                    <input type="text" name="biologia" id="">
                </div>
    
                <div>
                    <label for="">Fisica</label>
                    <input type="text" name="fisica" id="">
                </div>

                <div>
                    <label for="">Geografia</label>
                    <input type="text" name="geografia" id="">
                </div>
    
                <div>
                    <label for="">Ingles</label>
                    <input type="text" name="ingles" id="">
                </div>
    
                <div>
                    <label for="">Historia</label>
                    <input type="text" name="historia" id="">
                </div>
    
                <div>
                    <label for="">Frances</label>
                    <input type="text" name="frances" id="">
                </div>
    
                <div>
                    <label for="">Filosofia</label>
                    <input type="text" name="filosofia" id="">
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
                2024 <a href="index.php">Escolar Certificados</a> - Todos os direitos reservados pelo MINEDH
            </p>
     </footer>
</div>
</body>
</html>