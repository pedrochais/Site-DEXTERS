<?php
require_once('script/conexao.php');

//Verifica existência da variável 'pagina_atual'
if (isset($_GET['pagina_atual'])) {
    $current_page = $_GET['pagina_atual'];
} else {
    $current_page = 1;
}

//Preparação da instrução
$instruction = "
SELECT * FROM tb_publicacoes;
";

//Execução da instrução
$statement = $database->query($instruction);

//Número de itens que há na tabela
$number_of_rows = $statement->rowCount();

//Número de itens por página
$items_per_page = 5;

//Quantidade de páginas necessárias para mostrar os itens
$pages = ceil($number_of_rows / $items_per_page);

//ID do item inicial de cada página
$start_item = $items_per_page * ($current_page - 1);

//Prepara instrução para selecionar os itens
$instruction = "
SELECT * FROM tb_publicacoes LIMIT $start_item, $items_per_page;
";

//Execução da instrução
$statement = $database->query($instruction);

//Itens retornados
$items = $statement->fetchAll(PDO::FETCH_ASSOC);

//Caso 'current_page' contiver um valor inválido o usuário será redirecionado para a última página válida
if ($current_page > $pages) header("Location: publicacoes.php?pagina_atual=$pages");
/*
echo '<pre>';
print_r($items);
echo '<pre>';
*/     
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
    <title>DEXTERS | Publicações</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">TRABALHOS PUBLICADOS</h2>
        <section id="buscar">
            <form class="form-default" method="get">
                <label for="titulo">Título</label>
                <input id="titulo" class="text-box-default" type="text" placeholder="Digite o título da publicação">
                <label for="autor">Autor(es)</label>
                <input id="autor" class="text-box-default" type="text" placeholder="Digite o nome de um ou mais autores">
                <label for="palavra-chave">Palavra-chave</label>
                <input id="palavra-chave" class="text-box-default" type="text" placeholder="Digite uma ou mais chaves">
                <label for="ano-publicacao">Ano de publicação</label>
                <input id="ano-publicacao" class="text-box-default" type="text" placeholder="Digite o ano da publicação">
                <button type="submit" id="buscar" class="btn-default">
                    <img src="images/bt_lupa.png" alt="Botão buscar">
                </button>
            </form>
        </section>
        <hr>
        <section id="publicacoes" tabindex="-1">
            <?php
            foreach ($items as $key => $value) {
            ?>

            <div class="card-default">
                
                <h4>
                    <?= $value['titulo']; ?>
                </h4>
                <div class="infos">
                    <div class="descricao">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

                    <p class="ano-publicacao">Ano de  publicação: <?= $value['ano'] ?></p>
                </div>
            </div>

            <?php
            }
            ?>

            <!-- PAINEL DE PAGINAÇÃO -->
            <nav class="paginacao">
                <ul>
                    <li>
                        <a href="publicacoes.php?pagina_atual=1">
                        Primeira
                        </a>
                    </li>
                    
                    <?php
                    $right_margin = $left_margin = 2;
                    for ($page = $current_page - $left_margin; $page <= $current_page + $right_margin; $page++) {
                        if($current_page == $page) $bt_class = 'active';
                        else $bt_class = '';
                        
                        if($page >= 1 && $page <= $pages){    
                    ?>
                    
                    <li>
                        <a class="<?= $bt_class ?>" href="publicacoes.php?pagina_atual=<?= $page ?>">
                        <?= $page ?>
                        </a>
                    </li>

                    <?php
                        }
                    }
                    ?>
                    
                    <li>
                        <a href="publicacoes.php?pagina_atual=<?= $pages ?>">
                        Última
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </main>

    <?php include('rodape.html'); ?>

    <script src="js/publicacoes.js"></script>
</body>

</html>