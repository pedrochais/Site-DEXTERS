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
        <h2>TRABALHOS PUBLICADOS</h2>
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
        </hr>
        <section id="publicacoes">
            <div class="card-publicacao">
                <div class="imagem"></div>
                <div class="titulo"></div>
                <div class="autores"></div>
            </div>
        </section>
    </main>
    
    <?php include('rodape.html'); ?>
</body>
</html>