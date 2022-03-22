const breakpoint = document.getElementById('breakpoint')
const url = document.URL

function scroll_to_hr(){
    if(url.includes('buscar') || (url.includes('pagina_atual'))){
        window.scroll({
            top: breakpoint.offsetTop,
            left: 0,
            behavior: 'smooth'
        });
    }
}
