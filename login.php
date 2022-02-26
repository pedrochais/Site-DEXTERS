<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/login.css">
    <title>DEXTERS | Login</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">Área do administrador</h2>
        <section id="login">
            <div class="card-default">
                <h3 class="titulo-card-default">Login</h3>

                <form class="form-default" method="post">
                    <input class="text-box-default" type="text" id="usuario" placeholder="Digite o usuário">
                    <input class="text-box-default" type="password" id="senha" placeholder="Digite a senha de acesso">

                    <input class="btn-default" type="submit" value="Entrar">
                </form>
            </div>
        </section>
    </main>

    <?php include('rodape.html'); ?>
</body>

</html>