<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/noticias.css">
    <title>DEXTERS | Notícias</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">NOTÍCIAS</h2>
        <section id="buscar">
            <form class="form-default" method="get">
                <label for="titulo">Título</label>
                <input id="titulo" class="text-box-default" type="text" placeholder="Digite o título da notícia">
                <label for="autor">Texto</label>
                <input id="texto" class="text-box-default" type="text" placeholder="Digite uma parte do texto">
                <button type="submit" id="buscar" class="btn-default">
                    <img src="images/bt_lupa.png" alt="Botão buscar">
                </button>
            </form>
        </section>
        <hr>
        <section id="noticias">
            <div class="card-default">
                <h4>Título da notícia</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere pulvinar mi a placerat. Morbi mi lectus, molestie quis ligula vel, dapibus maximus urna. Proin eget enim turpis. Quisque eget pretium arcu. Donec quis massa aliquam, interdum metus sed</p>
                <div class="imagem"></div>
                <div class="btn-novo">
                    <a href="noticia.php">
                        <button class="btn-default">Abrir notícia</button>
                    </a>
                </div>
            </div>

            <div class="card-default">
                <h4>Título da notícia</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere pulvinar mi a placerat. Morbi mi lectus, molestie quis ligula vel, dapibus maximus urna. Proin eget enim turpis. Quisque eget pretium arcu. Donec quis massa aliquam, interdum metus sed</p>
                <div class="imagem"></div>
                <div class="btn-novo">
                    <a href="noticia.php">
                        <button class="btn-default">Abrir notícia</button>
                    </a>
                </div>
            </div>

            <div class="card-default">
                <h4>Título da notícia</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere pulvinar mi a placerat. Morbi mi lectus, molestie quis ligula vel, dapibus maximus urna. Proin eget enim turpis. Quisque eget pretium arcu. Donec quis massa aliquam, interdum metus sed</p>
                <div class="imagem"></div>
                <div class="btn-novo">
                    <a href="noticia.php">
                        <button class="btn-default">Abrir notícia</button>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include('rodape.html'); ?>
</body>

</html>