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
        <h2 class="titulo">Acesso restrito</h2>

        <section id="login">
            <div class="card-default">
                 <form>
                    <h2 class="acesso">Login</h2>
                    <input type="text" id="titulo" placeholder="Digite o usuário">
                    <input type="text" id="texto" placeholder="Digite a senha de acesso">
                    <a href="#">
                        <button class="btn-default">Entrar</button>
                    </a>
                </form>
            </div>
        </section>
    </main>

    <?php include('rodape.html'); ?>

    
</body>

</html>