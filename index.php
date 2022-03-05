<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/ic_dexters.png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/index.css">
    <title>DEXTERS</title>
</head>

<body>
    <?php include('cabecalho.html'); ?>

    <main>
        <section id="banner">
            
            <div class="banner-info active-slide" id="slide1">    

                <div class="fundo-banner">
                    <img style="margin-top: -100px;" src="images/bg_banner_4.jpg" alt="Fundo banner DEXTERS">
                </div>

                <div class="tarja-banner">
                    <h3>DEXTERS um Espaço de Pesquisa e Inovação em Engenharia de Software</h3>
                    <p>O nosso objetivo é ser o melhor laboratório de Engenharia de Software do Brasil</p>
                </div>
                
            </div>

            <div class="banner-info" id="slide2" >
                <div class="fundo-banner">
                    <img style="margin-top: -100px;" src="images/bg_banner_3.jpg" alt="Fundo banner DEXTERS">
                </div>

                <div class="tarja-banner">
                    <h3>DEXTERS um Espaço de Pesquisa e Inovação em Engenharia de Software</h3>
                    <p>O nosso objetivo é ser o melhor laboratório de Engenharia de Software do Brasil</p>
                </div>
            </div>
            
            <div class="banner-info" id="slide3">
                <div class="fundo-banner">
                    <img src="images/bg_banner_1.jpg" alt="Fundo banner DEXTERS">
                </div>

                <div class="tarja-banner">
                    <h3>DEXTERS um Espaço de Pesquisa e Inovação em Engenharia de Software</h3>
                    <p>O nosso objetivo é ser o melhor laboratório de Engenharia de Software do Brasil</p>
                </div>
            </div>
            

            <div class="click-area left" id="slide-anterior">
                <img class="seta left" id="slide-anterior" src="images/bt_seta_banner.png" alt="Seta esquerda">
            </div>
            
            <div class="click-area right" id="slide-proximo">
                <img class="seta right" id="slide-proximo" src="images/bt_seta_banner.png" alt="Seta esquerda">
            </div>
        </section>

        <div class="atividades-desenvolvidas">
            <h1>Áreas de Atuação</h1>
            <p>
                O nosso laboratório trabalha com as mais diversas áreas dentro da Engenharia de Software
            </p>
        </div>
        <section id="atividades">
            <div class="atividades">
                <div class="images-atividades">
                    <div class="card-atividade-1">
                        <div class="texto">
                        </div>
                    </div>
                    <div class="card-atividade-2">
                        <div class="texto">
                        </div>
                    </div>
                    <div class="card-atividade-3">
                        <div class="texto">
                        </div>
                    </div>
                    <div class="card-atividade-4">
                        <div class="texto">
                        </div>
                    </div>
                    <div class="card-atividade-5">
                        <div class="texto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="texto-area">
                <h1 class="titulo-texto-explicativo" align="center">Engenharia de Software</h1>
                <p class="texto-explicativo">
                    Engenharia de software é uma área da computação dedicada à concepção, especificação, desenvolvimento e manutenção de sistemas de software, aplicando tecnologias e práticas de gerências de projetos e outras disciplinas.
                </p>
            </div>
        </section>

        <section id="conheca-dexters">
            <h2>Quem somos?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas suscipit elit ligula, et gravida massa eleifend non. Vestibulum tempus feugiat justo, ornare ornare ex auctor vel. Curabitur interdum nisi ut augue tempus consequat. Phasellus nec tempus tortor. Nullam erat risus, consectetur accumsan orci sit amet, hendrerit egestas ante. Pellentesque est lectus, rutrum sit amet tincidunt a, dictum in enim. Sed commodo risus neque, sed commodo mi ultricies ultrices. Sed vitae elementum est. Duis nec lectus mauris. Nam sed orci neque.</p>
            <a href="integrantes.php"><button class="btn-default">Integrantes</button></a>
        </section>
    </main>

    <script src="js/index.js"></script>
    <?php include('rodape.html'); ?>
</body>

</html>