<?php
require_once('script/conexao.php');

//Verifica existência da variável 'pagina_atual'
if (!empty($_GET['pagina_atual'])) {
    $current_page = $_GET['pagina_atual'];
} else {
    $current_page = 1;
}

//Definição da URL para paginação dos resultados da busca
if (!empty($_GET['titulo'])) $url = "titulo={$_GET['titulo']}&autores={$_GET['autores']}&palavra-chave={$_GET['palavra-chave']}&ano={$_GET['ano']}&";
else $url = '';

//Número de itens por página
$items_per_page = 5;

//Índice do item inicial de cada página
$start_item = $items_per_page * ($current_page - 1);

//Obtendo valores dos inputs através do GET
if (!empty($_GET['titulo'])) {
    $titulo = '%' . $_GET['titulo'] . '%';
    $autores = '%' . $_GET['autores'] . '%';
    $palavra_chave = '%' . $_GET['palavra-chave'] . '%';
    $ano = '%' . $_GET['ano'] . '%';
} else {
    $titulo = $autores = $palavra_chave = $ano = '%%';
}

//Obtendo a quantidade total de linhas que é retornada com base nos parâmetros passados
$instruction = "
SELECT * FROM `tb_publicacoes` WHERE (`titulo` LIKE :titulo) 
                                AND (`autores` LIKE :autores) 
                                AND (`ano` LIKE :ano) 
";
$statement = $database->prepare($instruction);
$statement->bindValue(':titulo', $titulo);
$statement->bindValue(':autores', $autores);
$statement->bindValue(':ano', $ano);
$statement->execute();

//Número total de linhas
$total_rows = $statement->rowCount();

//Obtendo a quantidade de linhas limitadas por página com base nos parâmetros passados
$instruction = "
SELECT * FROM `tb_publicacoes` WHERE (`titulo` LIKE :titulo) 
                                AND (`autores` LIKE :autores) 
                                AND (`ano` LIKE :ano)
                                LIMIT $start_item, $items_per_page;
";
$statement = $database->prepare($instruction);
$statement->bindValue(':titulo', $titulo);
$statement->bindValue(':autores', $autores);
$statement->bindValue(':ano', $ano);
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
if ($current_page > $pages) header("Location: publicacoes.php?$url pagina_atual=$pages");
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/publicacoes.css">
    <title>Publicações | DEXTERS</title>
</head>

<body onload="scrollToHr()">
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">TRABALHOS PUBLICADOS</h2>
        <section id="buscar">
            <form class="form-default" method="get" action="publicacoes.php">
                <label for="titulo">Título</label>
                <input id="titulo" class="text-box-default" name="titulo" type="search" placeholder="Digite o título da publicação">
                <label for="autor">Autor(es)</label>
                <input id="autor" class="text-box-default" name="autores" type="text" placeholder="Digite o nome de um ou mais autores">
                <label for="palavra-chave">Palavra-chave</label>
                <input id="palavra-chave" class="text-box-default" name="palavra-chave" type="text" placeholder="Digite uma ou mais chaves">
                <label for="ano-publicacao">Ano de publicação</label>
                <input id="ano-publicacao" class="text-box-default" name="ano" type="text" placeholder="Digite o ano da publicação">

                <button name="buscar" id="buscar" class="btn-default">
                    <img src="images/bt_lupa.png" alt="Botão buscar">
                </button>

            </form>
        </section>
        <hr id="breakpoint">
        <section id="publicacoes" tabindex="-1">
            <?php
            if ($current_page == 0) {
            ?>
                <h1 class="no-results">Sem resultados!</h1>
            <?php
            } else {
                foreach ($items as $key => $value) {
            ?>
                    <div class="card-default">
                        <h4>
                            <?= $value['titulo']; ?>
                        </h4>

                        <div class="infos">
                            <div class="descricao">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                            </div>
                            <div class="compartilhar">
                                <p>Compartilhe</p>
                                <div class="redes-sociais">
                                    <img src="images/svg/ic_whatsapp.svg" alt="Whatsapp ícone">
                                    <img src="images/svg/ic_facebook.svg" alt="Facebook ícone">
                                    <img src="images/svg/ic_twitter_blue.svg" alt="Twitter ícone">
                                </div>
                            </div>
                            <div class="autores">
                                <p>
                                    <?= $value['autores']; ?>
                                </p>
                            </div>
                        </div>

                        <div class="download-ano">
                            <a href="<?= $value['link'] ?>">
                                <button class="btn-default">Download/Link</button>
                            </a>

                            <p class="ano-publicacao">Ano de publicação: <?= $value['ano'] ?></p>
                        </div>
                    </div>
                <?php
                } //ENDFOREACH
                ?>

                <!-- PAINEL DE PAGINAÇÃO -->
                <nav class="paginacao">
                    <ul>
                        <li>
                            <a href="publicacoes.php?<?= $url ?>pagina_atual=1">
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
                                    <a class="<?= $bt_class ?>" href="publicacoes.php?<?= $url ?>pagina_atual=<?= $page ?>">
                                        <?= $page ?>
                                    </a>
                                </li>
                        <?php
                            } //ENDIF
                        } //ENDFOR
                        ?>

                        <li>
                            <a href="publicacoes.php?<?= $url ?>pagina_atual=<?= $pages ?>">
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