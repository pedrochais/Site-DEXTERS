function home() {
    const areaDoTexto = document.querySelector('#atividades > .texto-area');
    const areas = document.querySelector('.images-atividades');
    let tituloAnterior = `Engenharia de Software`;
    let textoAnterior = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus.`;

    function fadeIn (elemento) {
        let opacidade = 0.1;
        let timer = setInterval(function () {
            if (opacidade >= 1) {
                clearInterval(timer);
            }
            elemento.style.opacity = opacidade;
            elemento.style.filter = `alpha(opacity="${opacidade*100}")`;
            opacidade += opacidade*0.1;
        }, 10);
    }

    function exibeTexto(evento) {
        const titulo = areaDoTexto.querySelector('.titulo-texto-explicativo');
        const texto = areaDoTexto.querySelector('.texto-explicativo');

        titulo.style.opacity = 0;
        texto.style.opacity = 0;

        const elementoAlvo = evento.target;
        
        switch(elementoAlvo.className){
            case 'card-atividade-1':
                tituloAnterior = `Engenharia de Software`;
                textoAnterior = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-2':
                tituloAnterior = `Modelagem de Sistemas Complexos`;
                textoAnterior = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim. Nulla facilisi. Vestibulum risus lorem, porttitor nec faucibus vitae, feugiat in lorem. Sed vulputate urna eget orci maximus blandit. Pellentesque ex quam, cursus eget eros sit amet, finibus porttitor eros. Aenean ut bibendum leo. Sed tempus fringilla nisi, in molestie enim tincidunt id. Etiam ut eleifend risus, vel auctor magna.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-3':
                tituloAnterior = `Interação Humano Computador`;
                textoAnterior = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-4':
                tituloAnterior = `Sistemas de Informação`;
                textoAnterior = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim. Nulla facilisi. Vestibulum risus lorem, porttitor nec faucibus vitae, feugiat in lorem.`;
                titulo.innerHTML = tituloAnterior;
                texto.innerHTML = textoAnterior;
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-5':
                tituloAnterior = `Ensino de Computação`;
                textoAnterior = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim. Nulla facilisi. Vestibulum risus lorem, porttitor nec faucibus vitae, feugiat in lorem. Sed vulputate urna eget orci maximus blandit. Pellentesque ex quam, cursus eget eros sit amet, finibus porttitor eros.`;
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
        switch(evento.target.className){
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

    areas.addEventListener('mouseover', exibeTexto);
    areas.addEventListener('click', exibeTexto);
    //areas.addEventListener('mouseout', removeTexto);
    /*onsole.log(areas);
    console.log(areaDoTexto);
    console.log(document.getElementById('atividades'));
    console.log(areas.className);*/
}

home();