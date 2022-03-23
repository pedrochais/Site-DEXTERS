let breakpoint = document.getElementById('breakpoint')
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
