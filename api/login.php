<?php

include("conexao.php");

if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
    echo "<script> 

       //espera o html carregar todo
       document.addEventListener('DOMContentLoaded', () => {

       const res = document.getElementById('res');
        
        // mensagem de login com sucesso
        res.style.padding = '20px'
        res.style.background = '#57ff093f'
        res.style.color = '#9ba5a2ff'
        res.style.color = '10px'
        res.style.borderRadius = '10px'
        res.style.display = 'flex'
        res.style.alignItems = 'center'
        res.style.gap = '10px'
        res.innerHTML = `<i class='fa-solid fa-circle-check'></i> Login com sucesso! Redirecionando...`
        
        //mantem o usuario por dois segundos na pagina de login e depois redireciona ele 
        setTimeout(function() {
        window.location.href = '../cinedestino.php'; 
        }, 2000);

       });

        </script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/Cinedestino-main/assets/Image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Login</title>
</head>

<body <?php if (isset($_GET['erro']) && $_GET['erro'] == 1) echo 'data-erro="1"'; ?>>
    <main class="conteudo">
        <div class="container-login">
            <form action="teste_de_login.php" method="post">
                <h1>Entre na sua conta gratuita</h1>

                <label for="">Email</label>
                <input type="text" class="email_senha" id="email" name="email" placeholder="Digite seu e-mail aqui">
                <label for="">Senha</label>
                <input type="password" class="email_senha" id="Senha" name="senha" placeholder="Digite sua senha aqui">

                <input type="submit" class="botao_enviar" onclick="Criar(event)" id="Button" name="submit" value="Entrar">
                <div id="res">

                </div>

                <p class="login-option">Não criou uma conta? <a href="../cadastro_de_usuarios/formulario_de_cadastro.php">Cadastrar</a></p>
            </form>
        </div>
    </main>

    <script src="../assets/JavaScript/login.js"></script>
</body>

</html>
