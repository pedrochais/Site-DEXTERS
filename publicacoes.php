<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icone.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/publicacoes.css">
    <title>DEXTERS | Publicações</title>
</head>
<body>
    <?php include('cabecalho.html'); ?>
    
    <main>
        <h2 class="titulo">TRABALHOS PUBLICADOS</h2>
        <section id="buscar">
            <form>
                <label for="titulo">Título</label>
                <input type="text" id="titulo">
                <label for="autor">Autor(es)</label>
                <input type="text" id="autor">
                <label for="palavra-chave">Palavra-chave</label>
                <input type="text" id="palavra-chave">
                <label for="ano-publicacao">Ano de publicação</label>
                <input type="text" id="ano-publicacao">
                <button type="submit" id="buscar">Buscar</button>
            </form>
        </section>
        <hr>
        <section id="publicacoes">
            <div class="card-publicacao">
                <h4>Título da publicação/artigo</h4>
                <div class="infos">
                    <div class="descricao">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="compartilhar">
                        <p>Compartilhe</p>
                        <div class="redes-sociais">
                            <img src="./images/svg/whatsapp.svg" alt="Whatsapp ícone">
                            <img src="./images/svg/whatsapp.svg" alt="Instagram ícone">
                            <img src="./images/svg/whatsapp.svg" alt="Facebook ícone">
                        </div>
                    </div>
                    <div class="autores">
                        <!-- <p class="autores-nomes">Autores </p> -->
                        <p>
                                Arthur Passos, André Barreto, Brenno Nascimento, Felipe Silva, Gabriel Costa, Yandson Costa, Davi Viana, Luis Rivero
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include('rodape.html'); ?>
</body>
</html>