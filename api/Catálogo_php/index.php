<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/Catálogo/css/style.css">
    <link rel="shortcut icon" href="../Image/favicon.ico" type="image/x-icon">
    <title>Cinedestino - Catálogo</title>
</head>

<body>
    <!-- Menu versão Desktop -->

    <header class="header">

        <!-- Lado esquerdo do menu -->
        <div class="nav-left">
            <h1 class="titulo-principal">Cinedestino</h1>

            <nav class="menu-desk">
                <a class="menu-item item-list" href="../../index.html"><i class="fa-solid fa-house"></i>Página inicial</a>
                <a class="menu-item item-list" href="index.html"><i class="fa-solid fa-gears"></i>Catálogo</a>
            </nav>
        </div>

        <!-- Centro do menu (barra de pesquisa fica sempre centralizada) -->
        <div class="nav-center">
            <form class="pesquisa-form" role="search" aria-label="Pesquisar filmes">
                <input type="search" name="Pesquisar" id="Pesquisar" placeholder="Pesquisar">
                <button class="pesquisar-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <!-- Lado direito do menu -->
        <div class="nav-right">
            <a href="../Sobre/index.html" class="right-item item-list"><i class="fa-solid fa-circle-info"></i>Sobre</a>
            <a href="../Login e Cadastro/index.html" class="botao-login">Entrar</a>
        </div>
    </header>


    <!--  Menu versão responsiva para Tablets e Celulares -->
    <header class="header-responsivo">
        <h1 class="titulo-principal">Cinedestino</h1>
        <nav class="menu">
            <ul class="nav-list">
                <li><a href="../../index.html" class="item-list"><i class="fa-solid fa-house"></i> Página inicial</a>
                </li>
                <li><a href="index.html" class="item-list"><i class="fa-solid fa-gears"></i> Catálogo</a></li>
                <li><a href="../Sobre/index.html" class="item-list"><i class="fa-solid fa-circle-info"></i> Sobre</a></li>
                <li><a href="../Login e Cadastro/index.html" class="botao-login"> Entrar</a></li>
            </ul>
        </nav>

        <!-- Versão responsiva de menu  para Tablets / Celulares -->
        <div class="pesquisa-responsivo">
            <button class="botao-menu">
                <i class="fa-solid fa-bars"></i>
            </button>
            <button class="botao-mobile-pesquisar">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <nav class="menu-lateral">
            <ul>
                <li><a href="../../index.html"><i class="fa-solid fa-house"></i> Página Inicial</a></li>
                <li><a href="index.html"><i class="fa-solid fa-gears"></i> Catálogo</a></li>
                <li><a href="../Sobre/index.html"><i class="fa-solid fa-circle-info"></i> Sobre</a></li>
                <li><a href="../../cadastro_de_usuarios/login.php"><i class="fa-solid fa-envelope"></i> Entrar</a></li>
            </ul>
        </nav>
    </header>

    <!-- Fundo escuro ao abrir o menu-->
    <div class="background">

    </div>

    <main class="conteudo">
        <div class="container-catalogo">

            <div class="card card-luz">

                <div class="card-imagem"></div>
                <div class="card-conteudo">
                    <h2>Caminho da Luz</h2>
                    <p class="lancamento">Lançamento: 21 Outubro 2025</p>
                    <p class="sinopse">A história de um jovem que encontra força na fé para transformar sua comunidade
                        em meio às adversidades. (detalhar melhor)</p>

                    <div class="card-acoes">
                        <a href="/api/filmes_page_php/Catálogo_Principal/Caminho_da_Luz/index.php" class="btn-info">Mais info</a>
                        <span class="btn-favorito" role="button" aria-label="Favoritar"><i
                                class="fa-regular fa-heart"></i></span>
                    </div>
                </div>
            </div>

            <div class="card card-roma">

                <div class="card-imagem"></div>
                <div class="card-conteudo">
                    <h2>O Milagre em Roma</h2>
                    <p class="lancamento">Lançamento: 6 Janeiro, 2024</p>
                    <p class="sinopse">Durante a Idade Média, uma pequena capela no coração de Roma torna-se palco de um
                        milagre que muda a vida de todos ao redor. (detalhar melhor)</p>

                    <div class="card-acoes">
                        <a href="../filmes page/Catálogo Principal/O Milagre em Roma/index.html" class="btn-info">Mais info</a>
                        <span class="btn-favorito" role="button" aria-label="Favoritar"><i
                                class="fa-regular fa-heart"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filmes populares -->
        <section class="filmes-populares">
            <h1 class="title-filme">Filmes populares</h1>

            <article class="filmes">
                <div class="card-movie">
                    <img src="image/As Pegadas de Pedro.png" alt="As Pegadas de Pedro"
                        title="As Pegadas de Pedro  (Criado por Gemni IA e Chat GPT)">

                    <div class="card-hover">
                        <h3>As Pegadas de Pedro</h3>
                        <span>2025</span>

                        <div class="card-btn">
                            <a href="../filmes page/Catálogo Principal/As Pegadas de Pedro/index.html" class="btn-info-2">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="card-movie">
                    <img src="image/Sob o Manto da Virgem.png" alt="Sob o Manto da Virgem"
                        title="Sob o Manto da Virgem (Criado por Gemni IA e Chat GPT)">

                    <div class="card-hover">
                        <h3>Sob o Manto da Virgem</h3>
                        <span>2025</span>

                        <div class="card-btn">
                            <a href="../filmes page/Catálogo Principal/Sob o Manto da Virgem/index.html" class="btn-info-2">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="card-movie">
                    <img src="image/Entre Rosários e Estrelas.png" alt="Entre Rosários e Estrelas"
                        title="Entre Rosários e Estrelas (Criado por Gemni IA e Chat GPT)">

                    <div class="card-hover">
                        <h3>Entre Rosários e Estrelas</h3>
                        <span>2025</span>

                        <div class="card-btn">
                            <a href="../filmes page/Catálogo Principal/Entre Rosários e Estrelas/index.html" class="btn-info-2">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="card-movie">
                    <img src="image/O Silêncio do Mosteiro.png" alt="O Silêncio do Mosteiro"
                        title="O Silêncio do Mosteiro (Criado por Gemni IA e Chat GPT)">

                    <div class="card-hover">
                        <h3>O Silêncio do Mosteiro</h3>
                        <span>2025</span>

                        <div class="card-btn">
                            <a href="../filmes page/Catálogo Principal/O Silêncio do Mosteiro/index.html" class="btn-info-2">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- Barra de filmes por categoria -->
        <section class="container-pesquisa">
            <div class="title-pesquisa">
                <h1>Pesquise filmes por categoria</h1>
            </div>
            <div class="container">

                <div class="list-pesquisa">
                    <ul class="list">
                        <li class="list-item" onclick="inspiracao()">Inspiração</li>
                        <li class="list-item" onclick="Historico()">Histórico</li>
                        <li class="list-item" onclick="Drama()">Drama</li>
                        <li class="list-item" onclick="Superacao()">Superação</li>
                        <li class="list-item" onclick="Religioso()">Religioso</li>
                        <li class="list-item" onclick="Aventura()">Aventura</li>
                    </ul>
                </div>
                <article class="card-filmes">
                    <h1 class="movie-title">Inspiração</h1>
                    <p class="desc-movie">Filmes que tocam o coração e mostram como a fé, o amor e a esperança podem
                        transformar vidas.<br>
                        Histórias que inspiram o público a acreditar no bem e recomeçar com coragem.</p>

                    <aside class="movie">
                        <!-- Filme 1-->
                        <div class="movie-card">
                            <img src="image/Luz em Meu Caminho.png" alt="Luz em Meu Caminho"
                                title="Luz em Meu Caminho (Criado por Gemni IA e Chat GPT)" class="image">
                            <div class="movie-hover">
                                <h3 class="title-desc">Luz em Meu Caminho</h3>
                                <span>2025</span>
                                <div class="movie-btn">
                                    <a href="../filmes page/Filmes de Inspiração/Luz em Meu Caminho/index.html" class="btn-info-movie">Mais info</a>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Filme 2 -->
                        <div class="movie-card">
                            <img src="image/Vento da Graça.png" alt="Vento da Graça"
                                title="Vento da Graça (Criado por Gemni IA e Chat GPT)" class="image2">
                            <div class="movie-hover">
                                <h3 class="title-desc2">Vento da Graça</h3>
                                <span>2025</span>
                                <div class="movie-btn">
                                    <a href="../filmes page/Filmes de Inspiração/Vento da Graça/index.html" class="btn-info-movie">Mais info</a>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Filme 3-->
                        <div class="movie-card">
                            <img src="image/Corações que Curam.png" alt="Corações que Curam"
                                title="Corações que Curam (Criado por Gemni IA e Chat GPT)" class="image3">
                            <div class="movie-hover">
                                <h3 class="title-desc3">Corações que Curam</h3>
                                <span>2025</span>
                                <div class="movie-btn">
                                    <a href="../filmes page/Filmes de Inspiração/Corações que Curam/index.html" class="btn-info-movie">Mais info</a>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Filme 4-->
                        <div class="movie-card">
                            <img src="image/A Luz do Perdão.png" alt="A Luz do Perdão"
                                title="A Luz do Perdão (Criado por Gemni IA e Chat GPT)" class="image4">
                            <div class="movie-hover">
                                <h3 class="title-desc4">A Luz do Perdão</h3>
                                <span>2025</span>
                                <div class="movie-btn">
                                    <a href="../filmes page/Filmes de Inspiração/A Luz do Perdão/index.html" class="btn-info-movie">Mais info</a>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </aside>
                </article>
            </div>
        </section>

        <!-- Laçamento container -->
        <section class="container-lacamento">
            <h1 class="title-lancamento">Lançamentos</h1>

            <article class="lacamento">
                <div class="card-lacamento">
                    <span class="marcacao">Novo</span>
                    <img src="image/Luz em Meu Caminho.png" alt="Luz em Meu Caminho"
                        title="Luz em Meu Caminho (Criado por Gemni IA e Chat GPT)">

                    <div class="lacamento-hover">
                        <h3>Luz em Meu Caminho</h3>
                        <span class="ano-movie">2025</span>

                        <div class="lacamento-btn">
                            <a href="../filmes page/Filmes de Inspiração/Luz em Meu Caminho/index.html" class="btn-info-3">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="card-lacamento">
                    <span class="marcacao">Novo</span>
                    <img src="image/A Última Capela.png" alt="A Última capela" title="A Última Capela (Criado por Gemni IA e Chat GPT)">

                    <div class="lacamento-hover">
                        <h3>A Última Capela</h3>
                        <span class="ano-movie">2025</span>

                        <div class="lacamento-btn">
                            <a href="../filmes page/Catálogo Principal/A Última Capela/index.html" class="btn-info-3">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="card-lacamento">
                    <span class="marcacao">Novo</span>
                    <img src="image/Lágrimas de Esperança.png" alt="Lágrimas de Esperança" title="Lágrimas de Esperança (Criado por Gemni IA e Chat GPT)">

                    <div class="lacamento-hover">
                        <h3>Lágrimas de Esperança</h3>
                        <span class="ano-movie">2025</span>

                        <div class="lacamento-btn">
                            <a href="../filmes page/Catálogo Principal/Lágrimas de Esperança/index.html" class="btn-info-3">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="card-lacamento">
                    <span class="marcacao">Novo</span>
                    <img src="image/Chama do Perdão.png" alt="Chama do Perdão" title="Chama do Perdão (Criado por Gemni IA e Chat GPT)">

                    <div class="lacamento-hover">
                        <h3>Chama do Perdão</h3>
                        <span class="ano-movie">2025</span>

                        <div class="lacamento-btn">
                            <a href="../filmes page/Catálogo Principal/Chama do Perdão/index.html" class="btn-info-3">Mais info</a>
                            <i class="fa-regular fa-heart"></i>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <!-- FOOTER Desktop versão -->

        <footer class="informacoes">
            <div class="informacoes-container">
                <div class="info-title">Conecte-se conosco</div>
                <div class="rede-sociais">
                    <a href="#redes-sociais-mobile" class="icon insta"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#redes-sociais-mobile" class="icon face"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#redes-sociais-mobile" class="icon twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#redes-sociais-mobile" class="icon mail"><i class="fa-solid fa-envelope"></i></a>
                </div>
                <div class="info-link">
                    <div class="info-coluna1">
                        <a href="#info-coluna">Empregos</a>
                        <a href="#info-coluna">Cookies e Preferências</a>
                        <a href="#info-coluna">Central de Ajuda</a>
                        <a href="#info-coluna">Termos de Uso</a>
                        <a href="#info-coluna">Privacidade</a>
                    </div>
                    <div class="info-coluna">
                        <a href="#info-coluna">Notícias</a>
                        <a href="#info-coluna">Centro de mídia</a>
                        <a href="#info-coluna">Aviso Legal</a>
                        <a href="#info-coluna">Realização dos Investidores</a>
                        <a href="#info-coluna">Feeds</a>
                    </div>
                    <div class="info-coluna">
                        <a href="#info-coluna">Home</a>
                        <a href="#info-coluna">Popular filmes</a>
                        <a href="#info-coluna">Trending filmes</a>
                        <a href="#info-coluna">Latest filmes</a>
                        <a href="#info-coluna">About us</a>
                    </div>
                </div>
                <p>&copy;Raphael Antônio & Lucas Batista</p>
                <p>Criado por Raphael Antônio & Lucas Batista</p>
            </div>
        </footer>

        <!-- FOOTER TABLET -->

        <footer class="informacoes-tablet">
            <div class="informacoes-container-tablet">

                <!-- COLUNA 1 -->
                <div class="rede-sociais-mobile-container">
                    <div class="info-title-tablet">Conecte-se conosco</div>

                    <div class="rede-sociais-tablet">
                        <a href="#rede-sociais-mobile" class="icon insta"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a href="#rede-sociais-mobile" class="icon face"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#rede-sociais-mobile" class="icon twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#rede-sociais-mobile" class="icon mail"><i class="fa-solid fa-envelope"></i></a>
                    </div>

                    <ul>
                        <li class="services"><a href="#services">Home</a></li>
                        <li class="services"><a href="#services">Popular filmes</a></li>
                        <li class="services"><a href="#services">Trending filmes</a></li>
                        <li class="services"><a href="#services">Latest filmes</a></li>
                        <li class="services"><a href="#services">About us</a></li>
                    </ul>
                </div>

                <!-- COLUNA 2 -->
                <div class="footer-col">
                    <ul>
                        <li><a href="#footer-col">Empregos</a></li>
                        <li><a href="#footer-col">Cookies & Preferências</a></li>
                        <li><a href="#footer-col">Central de Ajuda</a></li>
                        <li><a href="#footer-col">Termos de Uso</a></li>
                        <li><a href="#footer-col">Privacidade</a></li>
                    </ul>
                </div>

                <!-- COLUNA 3 -->
                <div class="footer-col">
                    <ul>
                        <li><a href="#footer-col">Notícias</a></li>
                        <li><a href="#footer-col">Centro de mídia</a></li>
                        <li><a href="#footer-col">Aviso Legal</a></li>
                        <li><a href="#footer-col">Investidores</a></li>
                        <li><a href="#footer-col">Feeds</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy;Raphael Antônio & Lucas Batista</p>
                <p>Criado por Raphael Antônio & Lucas Batista</p>
            </div>
        </footer>

        <!-- FOOTER MOBILE -->

        <footer class="footer-mobile">

            <div class="info-social-mobile">
                <div class="info-title-mobile">Conecte-se conosco</div>

                <div class="info-rede-mobile">
                    <a href="#footer-icons-mobile" class="icon insta"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#footer-icons-mobile" class="icon face"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#footer-icons-mobile" class="icon twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#footer-icons-mobile" class="icon mail"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>

            <div class="footer-links">

                <!-- COLUNA 1 -->
                <ul class="coluna-vertical">
                    <li><a href="#coluna-vertical">Empregos</a></li>
                    <li><a href="#coluna-vertical">Cookies e Preferências</a></li>
                    <li><a href="#coluna-vertical">Central de Ajuda</a></li>
                    <li><a href="#coluna-vertical">Termos de Uso</a></li>
                    <li><a href="#coluna-vertical">Privacidade</a></li>
                </ul>

                <!-- COLUNA 2 -->
                <ul class="coluna-vertical">
                    <li><a href="#coluna-vertical">Notícias</a></li>
                    <li><a href="#coluna-vertical">Centro de mídia</a></li>
                    <li><a href="#coluna-vertical">Aviso Legal</a></li>
                    <li><a href="#coluna-vertical">Realização dos Investidores</a></li>
                    <li><a href="#coluna-vertical">Feeds</a></li>
                </ul>

                <!-- COLUNA 3 (HORIZONTAL) -->
                <ul class="coluna-horizontal">
                    <li><a href="#coluna-horizontal">Home</a></li>
                    <li><a href="#coluna-horizontal">Popular filmes</a></li>
                    <li><a href="#coluna-horizontal">Trending filmes</a></li>
                    <li><a href="#coluna-horizontal">Latest filmes</a></li>
                    <li><a href="#coluna-horizontal">About us</a></li>
                </ul>
            </div>
            <div class="footer-copy">
                <p>&copy;Raphael Antônio & Lucas Batista</p>
                <p>Criado por Raphael Antônio & Lucas Batista</p>
            </div>
        </footer>
    </main>
    <script src="JavaScript/script.js"></script>
</body>

</html>
