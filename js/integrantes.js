// Modal
let modal = document.getElementById('modal-integrantes');
let nome = document.getElementById('nome')
let formacao = document.getElementById('formacao')
let lattes = document.getElementById('lattes')
let contato = document.getElementById('contato')

// Títulos e breakpoints
let titulos = document.querySelectorAll('h3.titulo')
let breakpoints = document.querySelectorAll('span.breakpoint')
let tt_ex_integrantes = document.querySelector('h2#tt-ex-integrantes')

// Fecha o modal e reseta as informações do modal após clicar no X ou em qualquer outra área além do modal
window.onclick = function (event) {
    let target = event.target;
    if (target.className === 'modal-background show' || target.className === 'btn-fechar') {
        modal.classList.remove('show');

        nome.innerText = ''
        formacao.innerText = ''
        lattes.href = ''
        contato.innerText = ''
    }
}

// Abrir modal e inserir as informações passadas através dos parâmetros
function openModal(novo_nome, novo_formacao, novo_lattes, novo_contato) {
    nome.innerText = novo_nome
    formacao.innerText = novo_formacao
    lattes.href = novo_lattes
    contato.innerText = novo_contato
    modal.classList.add('show')
}

// Fixar subtítulo no topo da tela após passar pelos seus respectivos breakpoints
function fixTitle(scroll_position) {
    let element_fixed = null

    for (let i = 0; i < titulos.length; i++) {
        if (scroll_position > breakpoints[i].offsetTop - 60) {
            titulos[i].classList.add('fixed')
            for (let j = 0; j < titulos.length; j++) {
                if (titulos[i] != titulos[j]) {
                    titulos[j].classList.remove('fixed')
                }
            }
        } else {
            titulos[i].classList.remove('fixed')
        }
    }
}

// Quando o evento onscroll for acionado serão chamadas 2 funções
window.onscroll = function () {
    let scroll_position = window.scrollY
    showButtonReturn(scroll_position)
    fixTitle(scroll_position)
}