// Modal
let modal = document.getElementsByClassName('modal')[0]
let modal_publicacoes = document.getElementById('modal-publicacoes')
let infos = document.getElementById('descricao')
let descricao = document.getElementById('descricao')

// Fecha o modal e reseta as informações do modal após clicar no X ou em qualquer outra área além do modal
window.onclick = function (event) {
    let target = event.target
    if (target.className === 'modal-background show' || target.className === 'btn-fechar') {
        modal_publicacoes.classList.remove('show')
        descricao.innerText = ''
        body.style.overflow = 'auto'
    }
}

// Abrir modal e inserir as informações passadas através dos parâmetros
function openModal(nova_descricao) {
    descricao.innerText = nova_descricao
    modal_publicacoes.classList.add('show')
    body.style.overflow = 'hidden'
    modal.scroll(0, 0)
}

// Quando o evento onscroll for acionado serão chamadas 2 funções
window.onscroll = function () {
    let scroll_position = window.scrollY
    showButtonReturn(scroll_position)
}

window.onload = function (){
    scrollToHr()
}