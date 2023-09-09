var hamburguer = $('#hamburguer');
var navbar = $('#navbar');

hamburguer.on('click', changeMenu);

function changeMenu() {
    if (hamburguer.hasClass('active-mobile')) {
        hamburguer.removeClass('active-mobile');
        navbar.css('display', 'none');
    } else {
        hamburguer.addClass('active-mobile');
        navbar.css('display', 'flex');
    }
}

$(document).ready(function () {
    const larguraMinima = 600; 

    function verificarLargura() {
        const larguraDaTela = $(window).width();
        const elemento = $('#navbar'); 

        if (larguraDaTela > larguraMinima) {
            elemento.css('display', 'flex');
        } else {
            elemento.css('display', 'none'); 
        }
    }

    verificarLargura();

    $(window).resize(verificarLargura);
});
