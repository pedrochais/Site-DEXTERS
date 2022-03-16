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
                <form class="form-default" method="post">
                    <input class="btn-default" type="submit" value="Gerenciamento de Integrantes">
                    <input class="btn-default" type="submit" value="Gerenciamento de Publicações">
                    <input class="btn-default" type="submit" value="Gerenciamento de Notícias">
                </form>
            </div>
        </section>
    </main>

    <?php include('rodape.html'); ?>
</body>

</html>