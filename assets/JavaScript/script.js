
// Seleciona os elementos principais
const botao = document.querySelector('.botao-menu')
const menuLateral = document.querySelector('.menu-lateral')
const background = document.querySelector('.background')

// Abre / fecha o menu ao clicar no botão

function toggleMenu() {
    botao.classList.toggle('ativo');
    menuLateral.classList.toggle('ativo');
    background.classList.toggle('ativo');
}

// Fecha o menu ao clicar no fundo escurecido
function closeMenu() {
    botao.classList.remove('ativo');
    menuLateral.classList.remove('ativo');
    background.classList.remove('ativo');
}

// Eventos
botao.addEventListener('click', toggleMenu);
background.addEventListener('click', closeMenu);
