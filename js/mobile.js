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
    // Defina o valor de largura em que você deseja alterar o estilo para 'flex'
    const larguraMinima = 600; // Por exemplo, para telas maiores que 768px

    // Função para verificar a largura da tela e aplicar o estilo
    function verificarLargura() {
        const larguraDaTela = $(window).width();
        const elemento = $('#navbar'); 

        if (larguraDaTela > larguraMinima) {
            elemento.css('display', 'flex');
        } else {
            elemento.css('display', 'none'); 
        }
    }

    // Chame a função no carregamento da página e sempre que a janela for redimensionada
    verificarLargura();

    $(window).resize(verificarLargura);
});




