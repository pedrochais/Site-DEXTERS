<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icone.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/integrantes.css">
    <title>DEXTERS | Integrantes</title>
</head>
<body>
    <?php include('cabecalho.html'); ?>
    
    <main>
        <h2 class="titulo">INTEGRANTES</h2>
        <section id="integrantes">

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button onclick="iniciaModal()" class="btn-detalhes">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button class="btn-detalhes">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button class="btn-detalhes">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button class="btn-detalhes">Detalhes</button>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
                <button class="btn-detalhes">Detalhes</button>
            </div>

        </section>
        <h2 class="titulo">EX-INTEGRANTES</h2>
        <section id="ex-integrantes">

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
            </div>

            <div class="card-integrante">
                <div class="imagem"></div>
                <h4>Nome Sobrenome</h4>
            </div>

        </section>
    </main>
    
    <?php include('rodape.html'); ?>

    <!-- MODAL -->
    <div id="modal-integrantes" class="modal-background">
        <div class="modal">
            <button onclick="fechaModal()" class="btn-fechar">x</button>
            <div class="bg-titulo">
                <h3>Informações do integrante</h3>
            </div>
            
            <div class="infos">
                <p>Nome: </p>
                <p>Cargo: </p>
                <p>Lattes: </p>
                <p>Contato: </p>
            </div>
            
        </div>
    </div>

    <script src="script/integrantes.js"></script>
</body>
</html>