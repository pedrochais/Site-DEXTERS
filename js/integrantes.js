let modal = document.getElementById('modal-integrantes');

window.onclick = function(event) {
    let target = event.target;
    if (target.className === 'modal-background show' || target.className === 'btn-fechar') {
        modal.classList.remove('show');
    }
}

function openModal(){
    modal.classList.add('show')
}
