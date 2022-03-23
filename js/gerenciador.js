let inputBox = document.querySelectorAll('.input-box');

inputBox.forEach(function (elemento) {
    const text_area = elemento.children[1];
    const min_num = elemento.children[2].children[0];

    text_area.addEventListener('keyup', () => {
        let valLenght = text_area.value.length;
        min_num.innerHTML = valLenght;
        valLenght > 0
            ? elemento.classList.add('active')
            : elemento.classList.remove('active');

        valLenght > 200
            ? elemento.classList.add('error')
            : elemento.classList.remove('error');
        console.log(valLenght);

    });
});

