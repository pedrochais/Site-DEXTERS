let botao = document.getElementById('btn-mobile')
const corpoDaPagina = document.querySelector('body');
const dropdownBtn = document.querySelector('.dropdown-sobre-li');

function toggleMenu() {
    let menu = document.getElementById('navbar')
    menu.classList.toggle('show')
}

function toggleDropdown(evento) {
    const elementoClicado = evento.target;
    const dropdownSobre = document.querySelector('.dropdown-sobre');
    if (elementoClicado.className === 'dropdown-sobre-li') {
        dropdownSobre.classList.toggle('show');
    } else {
        dropdownSobre.classList.remove('show');
    }
}

corpoDaPagina.addEventListener('click', toggleDropdown);