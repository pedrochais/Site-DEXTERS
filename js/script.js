let body = document.querySelector('body');
let btn_return = document.getElementById('btn-return-to-top')
let url = document.URL

// Quando for realizada uma busca ou o sistema de paginação for acionado o scroll 
// rolará automaticamente para o elemento hr quando a página for carregada
function scrollToHr() {
    if (url.includes('buscar') || (url.includes('pagina_atual'))) {
        window.scroll({
            top: breakpoint.offsetTop,
            left: 0,
            behavior: 'smooth'
        });
    }
}

// Mostra botão para retornar ao após descer o scroll mais de 200 pixels 
function showButtonReturn(scroll_position) {
    if (scroll_position > 200) {
        btn_return.classList.add('show')
    } else {
        btn_return.classList.remove('show')
    }
}

// Retornar ao topo
function returnToTop() {
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}
