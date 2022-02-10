var btnMobile = document.getElementsByClassName('btn-mobile')

function toggleMenu(){
    var nav = document.getElementsByClassName('menu')
    nav.classList.toggle('active')
}

btnMobile.addEventListener('click', toggleMenu)