// Quando o evento onscroll for acionado serão chamadas 2 funções
window.onscroll = function () {
    let scroll_position = window.scrollY
    showButtonReturn(scroll_position)
}

window.onload = function (){
    scrollToHr()
}