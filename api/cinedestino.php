<?php
require_once __DIR__ . "/auth.php";
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/../assets/Image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/../assets/css/style.css">
    <title>Cinedestino</title>
</head>

<body>
    <header>
        <!-- Menu Versão desktop-->
        <nav class="menu">
            <h1 class="titulo-principal">Cinedestino</h1>
            <ul class="nav-list">
                <li><a href="#" class="item-list"><i class="fa-solid fa-house"></i>Página inicial</a></li>
                <li><a href="#" class="item-list"><i class="fa-solid fa-gears"></i>Catálogo</a></li>
                <li><a href="#" class="item-list"><i class="fa-solid fa-circle-info"></i>Sobre</a></li>
                <li><a href="/api/cadastro_de_usuarios/sair.php" class="item-list">Sair</a></li>
            </ul>
            <img src="<?= htmlspecialchars($foto_perfil) ?>" class="foto_de_perfil" alt="foto de perfil">
        </nav>

        <!-- Versão responsiva de menu para Tablets e celulares -->

        <button class="botao-menu">
            <i class="fa-solid fa-bars"></i>
        </button>
        <nav class="menu-lateral">
            <ul>
                <li><a href="#"><i class="fa-solid fa-house"></i></a>Página Incial</li>
                <li><a href="#"><i class="fa-solid fa-gears"></i>Catálogo</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-info"></i>Sobre</a></li>
                <li><a href="/api/cadastro_de_usuarios/sair.php" class="item-list">Sair</a></li>
            </ul>

        </nav>

    </header>

    <div class="background">

    </div>

    <main class="conteudo">
        <div class="apresentacao">
            <h1>Melhores Filmes Católicos para</h1>
            <h3>
                Assistir com a sua família</h3>
            <div class="barra-de-pesquisa">
                <div class="barra-input"><input type="search" name="Pesquisar" id="Pesquisar" placeholder="Pesquisar"><i
                        class="fa-solid fa-magnifying-glass"></i></div>
                <input type="button" value="Pesquisar" id="botao-pesquisa">
            </div>
        </div>

        <!-- Catálogo Desktop - Parte 1  -->

        <section class="secao-filmes">
            <h1 class="secao-title">Lançamento</h1>

            <!-- Primeira coluna de filmes em exibição -->

            <!-- Filme 1 -->
            <article class="filmes">
                <div class="filme-card">
                    <div class="poster">
                        <a href="/../assets/filmes page/Caminho da Luz/index.html">
                            <img src="/../assets/Image/Caminho da Luz.jpg" alt="Caminho da Luz"
                                title="Caminho da Luz (Criador por Gemni IA e Chat GPT)">
                        </a>
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">Caminho da Luz</h1>
                        <span class="filme-ano">2025</span>
                    </div>
                </div>

                <!-- Filme 2 -->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/O Milagre em Roma.jpg" alt="O Milagre em Roma"
                            title="O Milagre em Roma  (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">O Milagre em Roma</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>

                <!-- Filme 3 -->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/Chama do Perdão.jpg" alt="Chama do Perdão"
                            title="Chama do Perdão (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">Chama do Perdão</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>

                <!-- Filme 4 -->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/O Peregrino de Assis.jpg" alt="O Peregrino de Assis"
                            title="O Peregrino de Assis (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">O Peregrino de Assis</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>

                <!-- Filme 4 -->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/O Silêncio do Mosteiro.jpg" alt="O Silêncio do Mosteiro"
                            title="O Silêncio do Mosteiro (Criado por Gemni IA e Chat GPT )">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">O Silêncio do Mosteiro</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>
            </article>
        </section>

        <!--  Catálogo Desktop - PARTE 1 (Mudança de cores no background) -->

        <section class="secao-filmes2">

            <!-- Filme 1 (background diferente)-->
            <article class="filmes2">
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/Lágrimas de Esperança.jpg" alt="Lágrimas de Esperança"
                            title="Lágrimas de Esperança (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">Lágrimas de Esperança</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>

                <!--  Filme 2 (background diferente) -->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/Sob o Manto da Virgem.jpg" alt="Sob o Manto da Virgem"
                            title="Sob o Manto da Virgem (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">Sob o Manto da Virgem</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>

                <!--  Filme 3 (background diferente)-->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/As Pegadas de Pedro.jpg" alt="As Pegadas de Pedro"
                            title="As Pegadas de Pedro (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">As Pegadas de Pedro</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>

                <!--  Filme 4 (background diferente) -->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/A Última Capela.jpg" alt="A Última Capela"
                            title="A Última Capela (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">A Última Capela</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>

                <!-- Filme 5 (background diferente) -->
                <div class="filme-card">
                    <div class="poster">
                        <img src="/../assets/Image/Entre Rosários e Estrelas.jpg" alt="Entre Rosários e Estrelas"
                            title="Entre Rosários e Estrelas (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">Entre Rosários e Estrelas</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Catálogo Versão Tablet -->

        <!-- Mobile PARTE 1 -->
        <section class="secao-filmes-mobile">
            <h1 class="secao-title-mobile">Lançamento</h1>
            <article class="filmes-mobile">

                <!-- Filme mobile 1-->
                <div class="filme-card-mobile">
                    <div class="poster-mobile"><a href="/../assets/filmes page/Caminho da Luz/index.html">

                            <img src="/../assets/Image/Caminho da Luz.jpg" alt="Caminho da Luz"
                                title="Caminho da Luz (Criador por Gemni IA e Chat GPT)">
                        </a>
                    </div>
                    <div class="filme-descricao-mobile">
                        <h1 class="filme-title-mobile">Caminho da Luz</h1>
                        <span class="filme-ano-mobile">2025</span>
                    </div>
                </div>

                <!-- Filme mobile 2-->
                <div class="filme-card-mobile">
                    <div class="poster-mobile">
                        <img src="/../assets/Image/O Milagre em Roma.jpg" alt="O Milagre em Roma"
                            title="O Milagre em Roma  (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao-mobile">
                        <h1 class="filme-title-mobile">O Milagre em Roma</h1>
                        <span class="filmes-ano-mobile">2025</span>
                    </div>
                </div>

                <!--  Filme mobile 3 -->
                <div class="filme-card-mobile">
                    <div class="poster-mobile">
                        <img src="/../assets/Image/Chama do Perdão.jpg" alt="Chama do Perdão"
                            title="Chama do Perdão (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao-mobile">
                        <h1 class="filme-title-mobile">Chama do Perdão</h1>
                        <span class="filmes-ano-mobile">2025</span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Mobile PARTE 2 - background diferente -->

        <section class="secao-filmes-mobile2">

            <!--  Filme mobile 1 (background diferente - Versão de Mobile)-->

            <article class="filmes-mobile2">
                <div class="filme-card-mobile2">
                    <div class="poster-mobile2">
                        <img src="/../assets/Image/O Peregrino de Assis.jpg" alt="O Peregrino de Assis"
                            title="O Peregrino de Assis (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao-mobile2">
                        <h1 class="filme-title-mobile2">O Peregrino de Assis</h1>
                        <span class="filme-ano-mobile2">2025</span>
                    </div>
                </div>

                <!-- Filme mobile 1 (background diferente - Versão de Mobile) -->
                <div class="filme-card-mobile2">
                    <div class="poster-mobile2">
                        <img src="/../assets/Image/O Silêncio do Mosteiro.jpg" alt="O Silêncio do Mosteiro"
                            title="O Silêncio do Mosteiro (Criado por Gemni IA e Chat GPT )">
                    </div>
                    <div class="filme-descricao-mobile2">
                        <h1 class="filme-title-mobile2">O Silêncio do Mosteiro</h1>
                        <span class="filmes-ano-mobile2">2025</span>
                    </div>
                </div>

                <!-- Filme mobile 1 (background diferente - Versão de Mobile) -->
                <div class="filme-card-mobile2">
                    <div class="poster-mobile2">
                        <img src="/../assets/Image/Lágrimas de Esperança.jpg" alt="Lágrimas de Esperança"
                            title="Lágrimas de Esperança (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao-mobile2">
                        <h1 class="filme-title-mobile2">Lágrimas de Esperança</h1>
                        <span class="filmes-ano-mobile2">2025</span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Mobile PARTE 3 -->
        <section class="secao-filmes-mobile">

            <!--  Terceira coluna de filmes (background diferente - Versão de Mobile) -->
            <article class="filmes-mobile">
                <div class="filme-card-mobile">
                    <div class="poster-mobile">
                        <img src="/../assets/Image/Sob o Manto da Virgem.jpg" alt="Sob o Manto da Virgem"
                            title="Sob o Manto da Virgem (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao-mobile">
                        <h1 class="filme-title-mobile">Sob o Manto da Virgem</h1>
                        <span class="filme-ano-mobile">2025</span>
                    </div>
                </div>

                <!-- Filme mobile 1 (background diferente - Versão de Mobile) -->
                <div class="filme-card-mobile">
                    <div class="poster-mobile">
                        <img src="/../assets/Image/As Pegadas de Pedro.jpg" alt="As Pegadas de Pedro"
                            title="As Pegadas de Pedro (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao-mobile">
                        <h1 class="filme-title-mobile">As Pegadas de Pedro</h1>
                        <span class="filmes-ano-mobile">2025</span>
                    </div>
                </div>

                <!-- Filme mobile 2 (background diferente - Versão de Mobile) -->
                <div class="filme-card-mobile">
                    <div class="poster-mobile">
                        <img src="/../assets/Image/A Última Capela.jpg" alt="A Última Capela"
                            title="A Última Capela (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao-mobile">
                        <h1 class="filme-title-mobile">A Última Capela</h1>
                        <span class="filmes-ano-mobile">2025</span>
                    </div>
                </div>
            </article>
        </section>

        <!--Mobile PARTE 4 -->

        <section class="secao-filmes-mobile3">
            <article class="filmes-mobile3">
                <div class="filme-card-mobile3">
                    <div class="poster-mobile3 ">
                        <img src="/../assets/Image/Entre Rosários e Estrelas.jpg" alt="Entre Rosários e Estrelas"
                            title="Entre Rosários e Estrelas (Criado por Gemni IA e Chat GPT)">
                    </div>
                    <div class="filme-descricao">
                        <h1 class="filme-title">Entre Rosários e Estrelas</h1>
                        <span class="filmes-ano">2025</span>
                    </div>
                </div>
            </article>
        </section>

        <!-- FOOTER Desktop versão -->

        <footer class="informacoes">
            <div class="informacoes-container">
                <div class="info-title">Conecte-se conosco</div>
                <div class="rede-sociais">
                    <a href="#rede-sociais-mobile" class="icon insta"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#rede-sociais-mobile" class="icon face"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#rede-sociais-mobile" class="icon twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#rede-sociais-mobile" class="icon mail"><i class="fa-solid fa-envelope"></i></a>
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
</body>
<script src="/../assets/JavaScript/script.js"></script>

</html>
