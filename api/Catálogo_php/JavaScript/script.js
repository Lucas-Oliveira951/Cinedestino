
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



// Troca de Gênero de filmes
let movieTitle = document.querySelector('.movie-title')
let descMovie = document.querySelector('.desc-movie')

// Título dos filmes
let titleDesc = document.querySelector('.title-desc')
let titleDesc2 = document.querySelector('.title-desc2')
let titleDesc3 = document.querySelector('.title-desc3')
let titleDesc4 = document.querySelector('.title-desc4')

// Imagens
let image = document.querySelector('.image')
let image2 = document.querySelector('.image2')
let image3 = document.querySelector('.image3')
let image4 = document.querySelector('.image4')

// links
const Links = document.querySelectorAll('.btn-info-movie')
//Inspuração

function inspiracao() {
    movieTitle.innerHTML = 'Inspiração'
    descMovie.innerHTML = `Filmes que tocam o coração e mostram como a fé, o amor e a esperança podem transformar vidas.<br> Histórias que inspiram o público a acreditar no bem e recomeçar com coragem.`

    // image 1
    image.src = 'image/Luz em Meu Caminho.png'
    titleDesc.innerHTML = 'Luz em Meu Caminho'

    //Primeiro Link
    Links[0].href ='../filmes page/Filmes de Inspiração/Luz em Meu Caminho/index.html'
    
    //image 2
    image2.src = 'image/Vento da Graça.png'
    titleDesc2.innerHTML = 'Vento da Graça'

    //Segundo Link
    Links[1].href = '../filmes page/Filmes de Inspiração/Vento da Graça/index.html'

    //image 3
    image3.src = 'image/Corações que Curam.png'
    titleDesc3.innerHTML = 'Corações que Curam'

    //Terceiro Link
    Links[2].href = '../filmes page/Filmes de Inspiração/Corações que Curam/index.html'

    //image 4 
    image4.src = 'image/A Luz do Perdão.png'
    titleDesc4.innerHTML = 'A Luz do Perdão'

    //Quarto Link
    Links[3].href = '../filmes page/Filmes de Inspiração/A Luz do Perdão/index.html'

}

function Historico() {
    movieTitle.innerHTML = 'Histórico'
    descMovie.innerHTML = 'Obras que retratam momentos marcantes da história da Igreja e da humanidade, mostrando personagens e eventos que revelam o poder da fé ao longo dos séculos.'

    //image 1 
    image.src = 'image/A Cruz do Império.png'
    titleDesc.innerHTML = 'A Cruz do Império'
    
    //Primeiro Link
   Links[0].href = '../filmes page/Filmes Histórico/A Cruz do Império/index.html'

    // Image 2
    image2.src ='image/O Manuscrito de Antioquia.png'
    titleDesc2.innerHTML = 'O Manuscrito de Antioquia'

    //Segundo Link
    Links[1].href = '../filmes page/Filmes Histórico/O Manuscrito de Antioquia/index.html'

    //Image 3 
    image3.src = 'image/Os Guardiões do Santuário.png'
    titleDesc3.innerHTML = 'Os Guardiões do Santuário'

    //Terceiro Link
    Links[2].href = '../filmes page/Filmes Histórico/Os Guardiões do Santuário/index.html'

    //image 4 
    image4.src = 'image/A Jornada de Helena.png'
    titleDesc4.innerHTML = 'A Jornada de Helena'

    //Quarto Link
    Links[3].href = '../filmes page/Filmes Histórico/A Jornada de Helena/index.html'
}

function Drama() {
    movieTitle.innerHTML = 'Drama'
    descMovie.innerHTML = 'Narrativas emocionantes sobre desafios, perdas e reencontros, onde os personagens encontram sentido e consolo através da fé e do perdão.'

    // image 1
    image.src = 'image/O Peso do Silêncio.png'
    titleDesc.innerHTML = 'O Peso do Silêncio'

    //Primeiro Link
    Links[0].href = '../filmes page/FIlmes  Drama/O Peso do Silêncio/index.html'

    // image 2
    image2.src = 'image/Caminho de Lágrimas.png'
    titleDesc2.innerHTML = 'Caminho de Lágrimas'

    //Segundo Link
    Links[1].href = '../filmes page/FIlmes  Drama/Caminho de Lágrimas/index.html'

    // image 3
    image3.src = 'image/Promessa Quebrada.png'
    titleDesc3.innerHTML = 'Promessa Quebrada'

    //Terceiro Link
    Links[2].href = '../filmes page/FIlmes  Drama/Promessa Quebrada/index.html'

    // image 4
    image4.src = 'image/Entre a Dor e a Graça.png'
    titleDesc4.innerHTML = 'Entre a Dor e a Graça'

    //Quarto Link
    Links[3].href = '../filmes page/FIlmes  Drama/Entre a Dor e a Graça/index.html'

}

function Superacao() {
    movieTitle.innerHTML = 'Superação'
    descMovie.innerHTML = 'Histórias de força interior, coragem e fé diante das dificuldades. <br> Filmes que mostram que, com Deus, nenhuma dor é em vão e todo obstáculo pode ser vencido.'

    //image 1
    image.src = 'image/Chamas de Determinação.png'
    titleDesc.innerHTML = 'Chamas da Determinação'

    //Primeiro Link
    Links[0].href = '../filmes page/Filmes Superação/Chamas da Determinação/index.html'

    // image 2
    image2.src = 'image/Além do Medo.png'
    titleDesc2.innerHTML = 'Além do Medo'

    //Segundo Link
    Links[1].href = '../filmes page/Filmes Superação/Além do Medo/index.html'

    // image 3
    image3.src = '/assets/Catálogo/image/Um Novo amanhã.png'
    titleDesc3.innerHTML = 'Um Novo Amanhã'

    //Terceiro Link
    Links[2].href = '../filmes page/Filmes Superação/Um Novo Amanhã/index.html'

    // image 4
    image4.src = 'image/O Valor de Recomeçar.png'
    titleDesc4.innerHTML = 'O Valor de Recomeçar'

    //Quarto Link
    Links[3].href = '../filmes page/Filmes Superação/O Valor de Recomeçar/index.html'
}

function Religioso(){
    movieTitle.innerHTML = 'Religioso'
    descMovie.innerHTML = 'Filmes voltados à espiritualidade, devoção e aos ensinamentos cristãos. <br> Retratam a presença divina no cotidiano e o poder da oração em transformar corações.'

    // image 1 
    image.src = 'image/No Coração da Oração.png'
    titleDesc.innerHTML = 'No Coração da Oração'

    //Primeiro Link
    Links[0].href = '../filmes page/Filmes Religioso/No Coração da Oração/index.html'

    // image 2
    image2.src = 'image/Milagre no Deserto.png'
    titleDesc2.innerHTML = 'Milagre no Deserto'

    //Segundo Link
    Links[1].href = '../filmes page/Filmes Religioso/Milagre no Deserto/index.html'

    // image 3
    image3.src = 'image/Oração de Fátima.png'
    titleDesc3.innerHTML = 'Oração de Fátima'

    //Terceiro Link
    Links[2].href = '../filmes page/Filmes Religioso/Oração de Fátima/index.html'

    // image 4
    image4.src = 'image/O Canto dos Anjos.png'
    titleDesc4.innerHTML = 'O Canto dos Anjos'

    //Quarto Link
    Links[3].href = '../filmes page/Filmes Religioso/O Canto dos Anjos/index.html'
}

function Aventura() {
    movieTitle.innerHTML = 'Aventura '
    descMovie.innerHTML = 'Tramas cheias de movimento e descobertas, onde os protagonistas enfrentam desafios físicos e espirituais em jornadas que testam sua fé e determinação.'

    
    //image 1
    image.src = 'image/Nas Trilhas da Fé.png'
    titleDesc.innerHTML = 'Nas Trilhas da Fé'
    
    //Primeiro Link
    Links[0].href = '../filmes page/Filmes Aventura/Nas Trilhas da Fé/index.html'

    // image 2
    image2.src = 'image/A Ilha da Cruz Perdida.png'
    titleDesc2.innerHTML = 'A Ilha da Cruz Perdida'

    //Segundo Link
    Links[1].href = '../filmes page/Filmes Aventura/A Ilha da Cruz Perdida/index.html'

    // image 3
    image3.src = 'image/Rum ao Santuário.png'
    titleDesc3.innerHTML = 'Rumo ao Santuário'

    //Terceiro Link
    Links[2].href = '../filmes page/Filmes Aventura/Rumo ao Santuário/index.html'

    // image 4 
    image4.src = 'image/Guardião do Caminho.png'
    titleDesc4.innerHTML = 'Guardião do Caminho'

    //Quarto Link
    Links[3].href = '../filmes page/Filmes Aventura/Guardião do Caminho/index.html'
}