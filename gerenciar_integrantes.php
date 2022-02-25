<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/gerenciar_integrantes.css">
    <title>DEXTERS | Gerenciamento de Integrantes</title>
</head>
<body>
    <?php include('cabecalho.html'); ?>
    
    <main>
        <h2 class="titulo">Cadastro de Integrantes</h2>
        <section id="cadastro">
            <div class="cadastramento">
                 <form>
                   
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" placeholder="Digite seu nome">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" id="sobrenome" placeholder="Digite seu sobrenome">
                    <label for="lattes">Lattes</label>
                    <input type="text" id="lattes" placeholder="Digite o link do seu Lattes">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Digite seu email">
                    <div class="opcoes">
                        <input type="radio" name="op" value="Orientador"> Orientador
                        <input type="radio" name="op" value="Orientando" > Orientando
                    </div>
                   
                    <a href="#">
                        <button class="btn-default">Cadastrar</button>
                    </a>



                </form>
            </div>
        </section>
    </main>

    <?php include('rodape.html'); ?>

    
</body>

</html>