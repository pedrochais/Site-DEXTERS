<?php
require_once('script/conexao.php');

$orientadores_ativos = $database->query("
SELECT * FROM `tb_integrantes` WHERE orientador = 1 AND ativo = 1;
")->fetchAll(PDO::FETCH_ASSOC);

$orientandos_doutorado_ativos = $database->query("
SELECT * FROM `tb_integrantes` WHERE orientador = 0 AND ativo = 1 AND formacao = 'Doutorado';
")->fetchAll(PDO::FETCH_ASSOC);

$orientandos_mestrado_ativos = $database->query("
SELECT * FROM `tb_integrantes` WHERE orientador = 0 AND ativo = 1 AND formacao = 'Mestrado';
")->fetchAll(PDO::FETCH_ASSOC);

$orientandos_graduando_ativos = $database->query("
SELECT * FROM `tb_integrantes` WHERE orientador = 0 AND ativo = 1 AND formacao = 'Graduando';
")->fetchAll(PDO::FETCH_ASSOC);

$inativos = $database->query("
SELECT * FROM `tb_integrantes` WHERE ativo = 0;
")->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/integrantes.css">
    <title>Integrantes | DEXTERS</title>
</head>

<body onscroll="showButtonReturn()">
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">INTEGRANTES</h2>
        <span class="breakpoint"></span>
        <h3 class="titulo">Líderes</h3>
        <section id="integrantes-lideres">
            <?php
            foreach ($orientadores_ativos as $key => $value) {
            ?>

                <div class="card-integrante">
                    <div class="imagem"><img src="images/integrantes/<?= $value['foto'] ?>" alt=""></div>
                    <h4><?= $value['primeiro_nome'] ?> <?= $value['ultimo_nome'] ?></h4>
                    <button onclick="openModal('<?= $value['nome'] ?>', '<?= $value['formacao'] ?>', '<?= $value['lattes'] ?>', '<?= $value['contato'] ?>')" class="btn-default">Detalhes</button>

                </div>

            <?php
            } // ENDFOREACH
            ?>
        </section>

        <?php
        if (!empty($orientandos_doutorado_ativos)) {
        ?>
            <span class="breakpoint"></span>
            <h3 class="titulo">Doutorado</h3>
            <section id="integrantes-doutorado">
                <?php
                foreach ($orientandos_doutorado_ativos as $key => $value) {
                ?>

                    <div class="card-integrante">
                        <div class="imagem"><img src="images/integrantes/<?= $value['foto'] ?>" alt=""></div>
                        <h4><?= $value['primeiro_nome'] ?> <?= $value['ultimo_nome'] ?></h4>
                        <button onclick="openModal('<?= $value['nome'] ?>', '<?= $value['formacao'] ?>', '<?= $value['lattes'] ?>', '<?= $value['contato'] ?>')" class="btn-default">Detalhes</button>

                    </div>

                <?php
                } // ENDFOREACH
                ?>
            </section>

        <?php
        } // ENDIF
        ?>

        <?php
        if (!empty($orientandos_mestrado_ativos)) {
        ?>
            <span class="breakpoint"></span>
            <h3 class="titulo">Mestrado</h3>
            <section id="integrantes-mestrado">
                <?php
                foreach ($orientandos_mestrado_ativos as $key => $value) {
                ?>

                    <div class="card-integrante">
                        <div class="imagem"><img src="images/integrantes/<?= $value['foto'] ?>" alt=""></div>
                        <h4><?= $value['primeiro_nome'] ?> <?= $value['ultimo_nome'] ?></h4>
                        <button onclick="openModal('<?= $value['nome'] ?>', '<?= $value['formacao'] ?>', '<?= $value['lattes'] ?>', '<?= $value['contato'] ?>')" class="btn-default">Detalhes</button>

                    </div>

                <?php
                } // ENDFOREACH
                ?>
            </section>

        <?php
        } // ENDIF
        ?>

        <?php
        if (!empty($orientandos_graduando_ativos)) {
        ?>
            <span class="breakpoint"></span>
            <h3 class="titulo">Graduação</h3>
            <section id="integrantes-graduacao">
                <?php
                foreach ($orientandos_graduando_ativos as $key => $value) {
                ?>

                    <div class="card-integrante">
                        <div class="imagem"><img src="images/integrantes/<?= $value['foto'] ?>" alt=""></div>
                        <h4><?= $value['primeiro_nome'] ?> <?= $value['ultimo_nome'] ?></h4>
                        <button onclick="openModal('<?= $value['nome'] ?>', '<?= $value['formacao'] ?>', '<?= $value['lattes'] ?>', '<?= $value['contato'] ?>')" class="btn-default">Detalhes</button>

                    </div>

                <?php
                } // ENDFOREACH
                ?>
            </section>

        <?php
        } // ENDIF
        ?>

        <h2 class="titulo">EX-INTEGRANTES</h2>
        <section id="ex-integrantes">

            <?php
            foreach ($inativos as $key => $value) {
            ?>

                <div class="card-integrante">
                    <div class="imagem"><img src="images/integrantes/<?= $value['foto'] ?>" alt=""></div>
                    <h4><?= $value['primeiro_nome'] ?> <?= $value['ultimo_nome'] ?></h4>
                    <button onclick="openModal('<?= $value['nome'] ?>', '<?= $value['formacao'] ?>', '<?= $value['lattes'] ?>', '<?= $value['contato'] ?>')" class="btn-default">Detalhes</button>

                </div>

            <?php
            } // ENDFOREACH
            ?>

        </section>
    </main>

    <?php include('rodape.html'); ?>

    <!-- MODAL -->
    <div id="modal-integrantes" class="modal-background">
        <div class="modal">
            <button class="btn-fechar">x</button>
            <div id="infos">
                <p>
                    <span class="info">Nome:</span>
                    <span id="nome"></span>
                </p>
                <p>
                    <span class="info">Formação:</span>
                    <span id="formacao"></span>
                </p>
                <p>
                    <span class="info">Lattes:</span>
                    <span><a id="lattes" href="">Clique aqui para acessar</a></span>
                </p>
                <p>
                    <span class="info">Contato:</span>
                    <span id="contato"></span>
                </p>
            </div>
        </div>
    </div>

    <!-- RETORNAR AO TOPO -->
    <div onclick="returnToTop()" id="btn-return-to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <script src="js/integrantes.js"></script>
    <script src="js/script.js"></script>
</body>

</html>