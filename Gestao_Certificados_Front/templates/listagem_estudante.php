<?php
    $acao = 'recuperar';
    require '../controller/Estudantecontroller.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lista de Estudantes</title>
</head>
<body>
<div id="container">
        <header> 
            <div id="logo"><a href="">Museu Nacional</a></div>
            <nav>
                <ul>
                    <li><a href="../templates/index.php">Home</a></li>

                    <li><a href="../templates/form_estudante.php">Estudantes</a></li>
                    <li><a href="../templates/form_notas.php">Notas</a></li>
                    <li><a href="../templates/listagem_certificado.php">Certificados</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </nav>
        </header>
        <div class="front">
        <h2>Todos os estudantes</h2>
 
        <?php foreach ($estudante as $estudant): ?>

        <div class="listagem">

        <h3><?= $estudant -> nome ?></h3>

        <p><?= $estudant->nascimento ?></p>

        <p><?= $estudant->ano_conclusao ?></p>

        <div class="botao">
            <a href="form_notas.php?id=<?php echo $estudant->id;?>">Adicionar Notas</a>
            <?php
             $_SESSION['id_estudante'] = $estudant ->id;
            ?>
        </div>
        </div>

        <?php endforeach; ?>



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
            <a href="#">Sobre</a>
            </p>

            <p>
                2024 <a href="../templates/index.php">Escolar Certificados</a> - Todos os direitos reservados pelo MINEDH
            </p>
     </footer>
</div>
</body>
</html>