<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once("conexao.php");

$mensagem = null;
$tipo = null;
$redirect = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuarios(nome, email, senha) VALUES (:nome, :email, :senha)");

    if ($stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha,
    ])) {

        $id = $pdo->lastInsertId();

        $token = bin2hex(random_bytes(32));

        $pdo->prepare(
            "UPDATE usuarios 
                       SET token_cadastro = :token 
                       WHERE id = :id"
        )->execute([
            ':token' => $token,
            ':id' => $id
        ]);

        $mensagem = "<i class='fa-solid fa-circle-check'></i>Conta criada com sucesso! Redirecionando...";
        $tipo = "sucesso";
        $redirect = "escolher_foto.php?token=$token";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/../assets/Image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/../assets/css/cadastro.css">
    <title>Criar Conta</title>
</head>

<body>
    <main class="conteudo">
        <div class="container-login">
            <form action="formulario_de_cadastro.php" method="post" enctype="multipart/form-data">
                <h1>Crie sua conta gratuita</h1>

                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="inputUser" placeholder="Insira seu nome completo aqui." required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="inputUser" placeholder="Digite seu e-mail aqui." required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="Senha" class="inputUser" placeholder="Digite sua senha aqui." required>

                <input type="submit" id="Button" name="enviar" onclick="Criar()" value="Criar uma conta">
                <div id="res" data-tipo="<?= $tipo ?>" data-redirect="<?= $redirect ?>">
                    <?= $mensagem ?>
                </div>
                <p class="login-option">Já criou uma conta? <a href="../cadastro_de_usuarios/login.php">Login</a></p>
            </form>
        </div>
    </main>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const res = document.getElementById('res');

            if (!res || !res.textContent.trim()) return;

            if (res.dataset.tipo === 'sucesso') {
                res.style.padding = '20px'
                res.style.background = '#57ff093f'
                res.style.color = '#9ba5a2ff'
                res.style.color = '10px'
                res.style.borderRadius = '10px'
                res.style.display = 'flex'
                res.style.alignItems = 'center'
                res.style.gap = '10px'
            }

            if (res.dataset.redirect) {
                setTimeout(() => {
                    window.location.href = res.dataset.redirect;
                }, 2000);
            }
        });
    </script>

    <script src="/../assets/JavaScript/cadastro.js"></script>
</body>


</html>
