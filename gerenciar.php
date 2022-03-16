<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/gerenciar.css">
    <title>DEXTERS | Login</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">Gerenciamento</h2>
        <section id="login">
            <div class="card-default">
                <div class="btn-novo">
                    <a href="gerenciar_integrantes.php">
                        <input class="btn-default" type="submit" value="Gerenciamento de Integrantes">
                    </a>
                    <a href="gerenciar_publicacoes.php">
                        <input class="btn-default" type="submit" value="Gerenciamento de Publicações">
                    </a>
                    <a href="gerenciar_noticias.php">
                        <input class="btn-default" type="submit" value="Gerenciamento de Notícias">
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include('rodape.html'); ?>
</body>

</html>