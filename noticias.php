<?php
require_once('script/conexao.php');

//Verifica existência da variável 'pagina_atual'
if (!empty($_GET['pagina_atual'])) {
    $current_page = $_GET['pagina_atual'];
}else{
    $current_page = 1;
}

//Definição da URL para paginação dos resultados da busca
if (!empty($_GET['titulo'])) $url = "titulo={$_GET['titulo']}&palavra-chave={$_GET['palavra_chave']}&";
else $url = '';

//Número de itens por página
$items_per_page = 5;

//Índice do item inicial de cada página
$start_item = $items_per_page * ($current_page - 1);

//Obtendo valores dos inputs através do GET
if(!empty($_GET['titulo'])){
    $titulo = '%' . $_GET['titulo'] . '%';
    $palavra_chave = '%' . $_GET['palavra_chave'] . '%';
}else{
    $titulo = $palavra_chave = '%%';
}

//Obtendo a quantidade total de linhas que é retornada com base nos parâmetros passados
$instruction = "
SELECT * FROM `tb_noticias` WHERE (`titulo` LIKE :titulo) 
                                AND (`conteudo` LIKE :palavra_chave) 
";
$statement = $database->prepare($instruction);
$statement->bindValue(':titulo', $titulo);
$statement->bindValue(':palavra_chave', $palavra_chave);
$statement->execute();

//Número total de linhas
$total_rows = $statement->rowCount();

//Obtendo a quantidade de linhas limitadas por página com base nos parâmetros passados
$instruction = "
SELECT * FROM `tb_noticias` WHERE (`titulo` LIKE :titulo) 
                                AND (`conteudo` LIKE :palavra_chave) 
                                LIMIT $start_item, $items_per_page;
";
$statement = $database->prepare($instruction);
$statement->bindValue(':titulo', $titulo);
$statement->bindValue(':palavra_chave', $palavra_chave);
$statement->execute();

//Itens por página
$items = $statement->fetchAll(PDO::FETCH_ASSOC);

//Linhas por página
$rows_per_page = $statement->rowCount();

//Quantidade de páginas necessárias para mostrar os itens
$pages = ceil($total_rows / $items_per_page);

//Caso não houver nenhum resultado para a pesquisa o número de páginas será 0
if ($pages == 0) $current_page = 0;

//Caso 'current_page' contiver um valor inválido o usuário será redirecionado para a última página válida
if ($current_page > $pages) header("Location: noticias.php?$url pagina_atual=$pages");

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/noticias.css">
    <title>Notícias | DEXTERS</title>
</head>

<body onload="scrollToHr()">
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">NOTÍCIAS</h2>
        <section id="buscar">
            <form class="form-default" method="get">
                <label for="titulo">Título</label>
                <input id="titulo" class="text-box-default" name="titulo" type="text" placeholder="Digite o título da notícia">
                <label for="autor">Palavra-chave</label>
                <input id="texto" class="text-box-default" name="palavra_chave" type="text" placeholder="Digite uma palavra-chave">
                <button name="buscar" type="submit" id="buscar" class="btn-default">
                    <img src="images/bt_lupa.png" alt="Botão buscar">
                </button>
            </form>
        </section>
        <hr id="breakpoint">
        <section id="noticias">

            <?php
            if ($current_page == 0) {
            ?>
                <h1 class="no-results">Não foram encontrados resultados para a consulta.</h1>
                <?php
            } else {
                foreach ($items as $key => $value) {
                ?>

                    <div class="card-default">
                        <h4>
                            <?= $value['titulo']; ?>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere pulvinar mi a placerat. Morbi mi lectus, molestie quis ligula vel, dapibus maximus urna. Proin eget enim turpis. Quisque eget pretium arcu. Donec quis massa aliquam, interdum metus sed</p>
                        <div class="imagem"></div>
                        <div class="noticia-ano">
                            <p class="data"> <?= $value['data'] ?> </p>
                            <a class="right" href="noticia.php?id_noticia=<?= $value['id'] ?>&titulo=<?= $value['titulo'] ?>">
                                <button class="btn-default">Abrir notícia</button>
                            </a>
                        </div>
                    </div>

                <?php
                } //ENDFOREACH
                ?>

                <!-- PAINEL DE PAGINAÇÃO -->
                <nav class="paginacao">
                    <ul>
                        <li>
                            <a href="noticias.php?<?= $url ?>pagina_atual=1">
                                Primeira
                            </a>
                        </li>

                        <?php
                        $right_margin = $left_margin = 3;
                        for ($page = $current_page - $left_margin; $page <= $current_page + $right_margin; $page++) {
                            if ($current_page == $page) $bt_class = 'active';
                            else $bt_class = '';

                            if ($page >= 1 && $page <= $pages) {
                        ?>
                                <li>
                                    <a class="<?= $bt_class ?>" href="noticias.php?<?= $url ?>pagina_atual=<?= $page ?>">
                                        <?= $page ?>
                                    </a>
                                </li>
                        <?php
                            } //ENDIF
                        } //ENDFOR
                        ?>

                        <li>
                            <a href="noticias.php?<?= $url ?>pagina_atual=<?= $pages ?>">
                                Última
                            </a>
                        </li>
                    </ul>
                </nav>

            <?php
            } //ENDIFELSE
            ?>

        </section>
    </main>

    <?php include('rodape.html'); ?>
    <script src="js/script.js"></script>
</body>

</html>