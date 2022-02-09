function home() {
    const areaDoTexto = document.querySelector('#atividades > .texto-area');
    const areas = document.querySelector('.images-atividades');

    function exibeTexto(evento) {
        switch(evento.target.className){
            case 'card-atividade-1':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = `Lorem Ipsum teste1 kk`
                break;
            case 'card-atividade-2':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = `Lorem Ipsum teste2 kk`
                break;
            case 'card-atividade-3':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = `Lorem Ipsum teste3 kk`
                break;
            case 'card-atividade-4':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = `Lorem Ipsum teste4 kk`
                break;
            case 'card-atividade-5':
                areaDoTexto.querySelector('.texto-explicativo').innerHTML = `Lorem Ipsum teste5 kk`
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
    console.log(areas.className);
}

home();