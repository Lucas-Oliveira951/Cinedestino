<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../../../Image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <title>Cinedestino - As Pegadas de Pedro</title>
</head>

<body>
    <!-- Menu versão Desktop -->

    <header class="header">

        <!-- Lado esquerdo do menu -->
        <div class="nav-left">
            <h1 class="titulo-principal">Cinedestino</h1>

            <nav class="menu-desk">
                <a class="menu-item" href="../../../../index.html"><i class="fa-solid fa-house"></i>Página inicial</a>
                <a class="menu-item" href="../../../Catálogo/index.html"><i class="fa-solid fa-gears"></i>Catálogo</a>
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
            <a href="../../../Sobre/index.html" class="right-item"><i class="fa-solid fa-circle-info"></i>Sobre</a>
            <a href="../../../Login e Cadastro/index.html" class="botao-login">Entrar</a>
        </div>
    </header>


    <!-- menu versão responsiva para tables e celulares -->
    <header class="header-responsivo">
        <h1 class="titulo-principal">Cinedestino</h1>
        <nav class="menu">
            <ul class="nav-list">
                <li><a href="index.html" class="item-list"><i class="fa-solid fa-house"></i>Página inicial</a></li>
                <li><a href="../../../Catálogo/index.html" class="item-list"><i class="fa-solid fa-gears"></i>Catálogo</a></li>
                <li><a href="../../../Sobre/index.html" class="item-list"><i class="fa-solid fa-circle-info"></i>Sobre</a></li>
                <li><a href="../../../Login e Cadastro/index.html" class="botao-login">Entrar</a></li>
            </ul>
        </nav>

        <!-- Versão responsiva de menu para Tablets e celulares -->

        <div class="pesquisa-responsivo">
            <button class="botao-menu"><i class="fa-solid fa-bars"></i> </button>
            <button class="botao-mobile-pesquisar"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <nav class="menu-lateral">
            <ul>
                <li><a href="../../../../index.html"><i class="fa-solid fa-house"></i> Página Inicial</a></li>
                <li><a href="../../../Catálogo/index.html"><i class="fa-solid fa-gears"></i> Catálogo</a></li>
                <li><a href="../../../Sobre/index.html"><i class="fa-solid fa-circle-info"></i> Sobre</a></li>
                <li><a href="../../../Login e Cadastro/index.html"><i class="fa-solid fa-envelope"></i> Entrar</a></li>
            </ul>
        </nav>
    </header>

    <!-- Fundo escuro ao abrir o menu-->
    <div class="background">

    </div>

    <!-- Poste do filme -->
    <main class="conteudo">

        <div class="container-poster">
            <div class="poster">
                <img src="../../../Image/As Pegadas de Pedro.jpg" alt="As Pegadas de Pedro" title="Imagem Criada pelo Gemni IA">
            </div>
            <div class="info-filme">
                <h1 class="titulo-filme">As Pegadas de Pedro</h1>
                <span>2h33 min | ⚓ Histórico / Espiritualidade</span>
                <div class="nota-filme">
                    <p><i class="fa-solid fa-star"></i>9,0/10</p>
                </div>
                <p class="sinopse">Um pescador humilde revive as lições de São Pedro e descobre o verdadeiro significado da obediência e da fé.</p>
                <div class="buttons">
                    <a href="#" class="button-trailer">Ver Trailer</a>
                    <a href="#" class="button-quiz">Ver Ahora</a>
                </div>
            </div>
        </div>
    </main>
    <script src="JavaScript/script.js"></script>
</body>

</html>
