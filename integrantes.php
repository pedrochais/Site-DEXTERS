<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/integrantes.css">
    <title>DEXTERS | Integrantes</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>

    <main>
        <h2 class="titulo">INTEGRANTES</h2>
        <h3 class="titulo">Líderes</h2>
        <section id="integrantes-lideres">
            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>
        </section>

        <h3 class="titulo">Mestrado</h2>
        <section id="integrantes-mestrado">
            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>
        </section>

        <h3 class="titulo">Doutorado</h2>
        <section id="integrantes-doutorado">
            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>
        </section>

        <h3 class="titulo">Graduação</h2>
        <section id="integrantes-graduacao">
            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>
        </section>

        <h2 class="titulo">EX-INTEGRANTES</h2>
        <section id="ex-integrantes">

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="toggleModal()" class="btn-default">Detalhes</button>
            </div>

        </section>
    </main>

    <?php include('rodape.html'); ?>

    <!-- MODAL -->
    <div id="modal-integrantes" class="modal-background">
        <div class="modal">
            <button onclick="toggleModal()" class="btn-fechar">x</button>
            <div id="infos">
                <p>
                    <span class="info">Nome:</span>
                    <span>Pedro Rocha Boucinhas Pacheco</span>
                </p>
                <p>
                    <span class="info">Cargo:</span>
                    <span>Estudante</span>
                </p>
                <p>
                    <span class="info">Lattes:</span>
                    <span><a href="https://lattes.cnpq.br/6144884845294658">Clique aqui para acessar</a></span>
                </p>
                <p>
                    <span class="info">Contato:</span>
                    <span>pedro.pacheco@discente.ufma.br</span>
                </p>
            </div>
        </div>
    </div>

    <script src="js/integrantes.js"></script>
</body>

</html>