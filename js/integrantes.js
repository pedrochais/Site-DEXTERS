let body = document.querySelector('body');
let modal = document.getElementById('modal-integrantes');
/*
function toggleModal(){
    modal.classList.toggle('show')
}
*/
function toggleModal(evento) {
    let target = evento.target;
    if (target.className === 'btn-detalhes'){
        modal.classList.add('show');
    }
    if (target.className === 'modal-background show' || target.className === 'btn-fechar'){
        modal.classList.remove('show');
    }
}

body.addEventListener('click', toggleModal);
