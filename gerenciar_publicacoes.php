<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/gerenciar_publicacoes.css">
    <title>DEXTERS | Gerenciamento de Publicacoes</title>
</head>
<body>
    <?php include('cabecalho.html'); ?>
    
    <main>
        <h2 class="titulo">Dados da Publicação</h2>
        <section id="cadastro">
            <div class="cadastramento">
                 <form class="form-default">
                    <div class="form-default" method="get">
                    <label for="nome">Título da Publicação/Artigo</label>
                    <input type="text" id="nome" placeholder="Digite o título">
                    </div>
                    
                    <div class="input-box" >
                        <label for="descricao">Descrição</label>
                        <textarea placeholder="Digite a descrição" maxlength="200"></textarea>
                        <div class="caracteres">
                            <span class="min_num">0</span>
                            <span class="max_num">/ 200</span>
                        </div>
                    </div>
                    
                    <div class="input-box" >
                        <label for="resumo">Resumo</label>
                        <textarea placeholder="Digite o resumo" maxlength="200"></textarea>
                        <div class="caracteres">
                            <span class="min_num">0</span>
                            <span class="max_num">/ 200</span>
                        </div>
                    </div>

                    <div class="form-default" >
                        <label for="link">Link</label>
                        <input type="url" id="link" placeholder="Digite o Link">
                        <label for="arquivo">Arquivo</label>
                        <div class="file-upload">
                            <input type="file" id="upload" style="display: none;">
                            <label for="upload" class="btn-default">Selecione o arquivo</label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="#">
                        <button class="btn-default">Cadastrar</button>
                    </a>
                                        
                </form>
            </div>
        </section>
    </main>

    <?php include('rodape.html'); ?>


    <script src="js/gerenciador.js"></script>
</body>

</html>