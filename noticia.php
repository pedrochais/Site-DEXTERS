<?php
require_once('script/conexao.php');

if(empty($_GET['id_noticia']) || empty($_GET['titulo'])){
    header('Location: noticias.php');
}

$id = $_GET['id_noticia'];

$instruction = "
SELECT * FROM `tb_noticias` WHERE id = :id;
";

$statement = $database->prepare($instruction);
$statement->bindValue(':id', $id);
$statement->execute();
$item = $statement->fetch(PDO::FETCH_ASSOC);

if(empty($item)){
    header('Location: noticias.php');
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/noticia.css">
    <title>DEXTERS | Notícia</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">NOTÍCIA</h2>
        <section id="cabecalho-noticia">
            <h3 class="titulo-noticia"> <?= $item['titulo'] ?> </h3>
            <div class="infos">
                <span id="autor"><b>Autor(es):</b> <?= $item['autor'] ?> </span>
                <span id="data"><b>Data de publicação:</b> <?= $item['data'] ?> </span>
                <span id="categoria"><b>Categoria:</b> <?= $item['categoria'] ?> </span>
            </div>
        </section>
        <hr>
        <section id="conteudo">
            <div class="imagem"></div>
            <p><?= $item['conteudo'] ?></p>
        </section>
    </main>

    <?php include('rodape.html'); ?>
</body>

</html>