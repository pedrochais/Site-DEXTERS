<?php
require_once('script/conexao.php');

$instruction = "
SELECT * FROM `tb_tecnologias`
";

$statement = $database->query($instruction);

//Itens por página
$items = $statement->fetchAll(PDO::FETCH_ASSOC);
/*
echo "<pre>";
print_r($items);
echo "</pre>";
*/
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/biblioteca.css">
    <title>Biblioteca | DEXTERS</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>
    <main>
        <h2 class="titulo">BIBLIOTECA</h2>
        <section id="biblioteca">
            <?php
            foreach ($items as $key => $value) {
                if (strlen($value['descricao']) > 150) {
                    $value['descricao'] = substr($value['descricao'], 0, 150) . '...';
                }
            ?>

                <div class="card-default">
                    <div class="infos">
                        <div class="imagem">
                            <a href="images/biblioteca/<?= $value['foto'] ?>" target="_blank">
                                <img src="images/biblioteca/<?= $value['foto'] ?>" width="100%" alt="">
                            </a>
                        </div>

                        <h4> <?= $value['nome'] ?> </h4>
                        <p>
                            <?= $value['descricao'] ?>
                        </p>
                    </div>
                    <div class="botoes">
                        <a href="<?= $value['artigo'] ?>">
                            <button class="btn-default">Artigo</button>
                        </a>
                        <a href="<?= $value['arquivo'] ?>">
                            <button class="btn-default">Arquivo/Link</button>
                        </a>
                    </div>
                </div>

            <?php
            } //ENDFOREACH
            ?>
        </section>
    </main>

    <?php include('rodape.html'); ?>
</body>

</html>