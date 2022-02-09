function home() {
    const areaDoTexto = document.querySelector('#atividades > .texto-area');
    const areas = document.querySelector('.images-atividades');

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
                titulo.innerHTML = `Engenharia de Software`;
                texto.innerHTML = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus.`
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-2':
                titulo.innerHTML = `Modelagem de Sistemas Complexos`;
                texto.innerHTML = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim. Nulla facilisi. Vestibulum risus lorem, porttitor nec faucibus vitae, feugiat in lorem. Sed vulputate urna eget orci maximus blandit. Pellentesque ex quam, cursus eget eros sit amet, finibus porttitor eros. Aenean ut bibendum leo. Sed tempus fringilla nisi, in molestie enim tincidunt id. Etiam ut eleifend risus, vel auctor magna.`
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-3':
                titulo.innerHTML = `Interação Humano Computador`;
                texto.innerHTML = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim.`
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-4':
                titulo.innerHTML = `Sistemas de Informação`;
                texto.innerHTML = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim. Nulla facilisi. Vestibulum risus lorem, porttitor nec faucibus vitae, feugiat in lorem.`
                fadeIn(titulo);
                fadeIn(texto);
                break;
            case 'card-atividade-5':
                titulo.innerHTML = `Ensino de Computação`;
                texto.innerHTML = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a nibh mi. Nulla ut scelerisque libero, eget porta risus. Suspendisse a risus vel massa molestie consequat id ut enim. Nulla facilisi. Vestibulum risus lorem, porttitor nec faucibus vitae, feugiat in lorem. Sed vulputate urna eget orci maximus blandit. Pellentesque ex quam, cursus eget eros sit amet, finibus porttitor eros.`
                fadeIn(titulo);
                fadeIn(texto);
                break;
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
    //areas.addEventListener('mouseout', removeTexto);
    console.log(areas);
    console.log(areaDoTexto);
    console.log(document.getElementById('atividades'));
    console.log(areas.className);
}

home();