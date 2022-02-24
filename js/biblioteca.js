const btn_detalhes = document.querySelectorAll('.btn-default');
const body = document.querySelector('body');
const descricao = document.querySelectorAll('.descricao');

btn_detalhes.forEach(function (elemento) {
    elemento.addEventListener('click', function (evento) {
        const div_pai = elemento.parentElement.parentElement;

        div_pai.lastElementChild.classList.toggle('show-desc');
    });
});