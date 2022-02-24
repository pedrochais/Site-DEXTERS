function home() {
    const slides = document.querySelectorAll(".banner-info");
    let numSlideAtual = 1;
    const totalSlides = slides.length;
    const seta_slider = document.querySelectorAll(".seta");
    const areaDoTexto = document.querySelector('#atividades > .texto-area');
    const areas = document.querySelector('.images-atividades');
    let tituloAnterior = `Engenharia de Software`;
    let textoAnterior = `Engenharia de software é uma área da computação dedicada à concepção, especificação, desenvolvimento e manutenção de sistemas de software, aplicando tecnologias e práticas de gerências de projetos e outras disciplinas.`;

    function fadeIn(elemento) {
        let opacidade = 0.1;
        let timer = setInterval(function () {
            if (opacidade >= 1) {
                clearInterval(timer);
            }
            elemento.style.opacity = opacidade;
            elemento.style.filter = `alpha(opacity="${opacidade * 100}")`;
            opacidade += opacidade * 0.1;
        }, 10);
    }

    function exibeTexto(evento) {
        const titulo = areaDoTexto.querySelector('.titulo-texto-explicativo');
        const texto = areaDoTexto.querySelector('.texto-explicativo');

        titulo.style.opacity = 0;
        texto.style.opacity = 0;

        const elementoAlvo = evento.target;

        switch (elementoAlvo.className) {
            case 'card-atividade-1':
                tituloAnterior = `Engenharia de Software`;
                textoAnterior = `Engenharia de software é uma área da computação dedicada à concepção, especificação, desenvolvimento e manutenção de sistemas de software, aplicando tecnologias e práticas de gerências de projetos e outras disciplinas.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-2':
                tituloAnterior = `Modelagem de Sistemas Complexos`;
                textoAnterior = `Um sistema complexo pode ser definido como situações nas quais “agentes interagem com o ambiente e entre si, e cujas ações geram estruturas emergentes observáveis, em escalas diferenciadas, a partir de regras, usualmente simples, que permitem a adaptação e a evolução do próprio sistema.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-3':
                tituloAnterior = `Interação Humano-Computador`;
                textoAnterior = `A área de Interação Humano-Computador (IHC) se dedica a estudar os fenômenos de comunicação entre pessoas e sistemas computacionais que está na interseção das ciências da computação e informação e ciências sociais e comportamentais. A pesquisa em IHC tem por objetivo fornecer explicações e previsões para fenômenos de interação usuário-sistema e resultados práticos para o projeto da interação.                `;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-4':
                tituloAnterior = `Sistemas de Informação`;
                textoAnterior = `Sistema de informação é o modelo, automatizado ou manual, de processos responsáveis por coletar e transmitir dados que sejam úteis ao desenvolvimento de produtos ou serviços das empresas, organizações e de demais projetos.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-5':
                tituloAnterior = `Ensino de Computação`;
                textoAnterior = `A Computação investiga processos de informação, desenvolvendo linguagens e técnicas para descrever processos existentes e também e métodos de resolução e análise de problemas, gerando novos processos.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            default:
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                titulo.style.opacity = 1;
                texto.style.opacity = 1;
        }
    }

    function removeTexto(evento) {
        switch (evento.target.className) {
            case 'card-atividade-1':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = ``
                break;
            case 'card-atividade-2':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = ``
                break;
            case 'card-atividade-3':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = ``
                break;
            case 'card-atividade-4':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = ``
                break;
            case 'card-atividade-5':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = ``
                break;

        }
    }

    function passaSlide(evento) {
        const slideAtivo = document.querySelector(".active-slide");
        let sentidoMudanca;
        const setaClicada = evento.target;

        // Verifica qual seta foi clicada
        switch(setaClicada.id) {
            case 'seta-anterior':
                if(numSlideAtual === 1) {
                    numSlideAtual = totalSlides;
                } else {
                    numSlideAtual--;
                }
                sentidoMudanca = 'esquerda';
                break;
            case 'seta-proximo':
                if(numSlideAtual === totalSlides) {
                    numSlideAtual = 1;
                } else {
                    numSlideAtual++;
                }
                sentidoMudanca = 'direita';
                break;
        }
        const elementoNovo = document.querySelector(`#slide${numSlideAtual}`);

        // Animação da mudança de slide
        //animacaoSlider(sentidoMudanca, slideAtivo, elementoNovo);

        // Muda o slide atual
        slideAtivo.classList.remove("active-slide");
        elementoNovo.classList.add("active-slide");
    }

    /*function animacaoSlider(sentido, slideAtual, slideNovo) {
        switch(sentido) {
            case 'esquerda':
                console.log(slideAtual);
                console.log(slideNovo);
                slideAtual.animate(
                    [
                        //Keyframes
                        {transform: 'translate(0px,0px)'},
                        {transform: 'translate(100px,0px)'}
                    ], 
                    {
                        duration: 1000
                        //iterations: 1
                    }
                );
                break;
            case 'direita':
                break;
        }
    }*/

    areas.addEventListener('mouseover', exibeTexto);
    areas.addEventListener('click', exibeTexto);
    seta_slider.forEach(function (elemento) {
        elemento.addEventListener('click', passaSlide);
    });
    //areas.addEventListener('mouseout', removeTexto);
    /*onsole.log(areas);
    console.log(areaDoTexto);
    console.log(document.getElementById('atividades'));
    console.log(areas.className);*/
}

home();