<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "conexao.php";

$cadastro_sucesso = false;
$token = null;

// Verifica envio do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar'])) {

    $nome  = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Cadastro do usuário
    $stmt = $pdo->prepare(
        "INSERT INTO usuarios (nome, email, senha)
         VALUES (:nome, :email, :senha)"
    );

    if ($stmt->execute([
        ':nome'  => $nome,
        ':email' => $email,
        ':senha' => $senha
    ])) {

        $id_usuario = $pdo->lastInsertId();

        // Gera token de cadastro
        $token = bin2hex(random_bytes(32));

        $pdo->prepare(
            "UPDATE usuarios
             SET token_cadastro = :token
             WHERE id = :id"
        )->execute([
            ':token' => $token,
            ':id'    => $id_usuario
        ]);

        $cadastro_sucesso = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="shortcut icon"
          href="/assets/Image/favicon.ico"
          type="image/x-icon">

    <link rel="stylesheet"
          href="/assets/css/cadastro.css">

    <title>Criar Conta</title>
</head>

<body>
<main class="conteudo">
    <div class="container-login">
        <form action="formulario_de_cadastro.php" method="post">
            <h1>Crie sua conta gratuita</h1>

            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome"
                   class="inputUser"
                   placeholder="Insira seu nome completo aqui"
                   required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                   class="inputUser"
                   placeholder="Digite seu e-mail aqui"
                   required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha"
                   class="inputUser"
                   placeholder="Digite sua senha"
                   required>

            <input type="submit"
                   id="Button"
                   name="enviar"
                   value="Criar uma conta">

            <!-- Mensagem de resposta -->
            <div id="res">
                <?php if ($cadastro_sucesso): ?>
                    <i class="fa-solid fa-circle-check"></i>
                    Conta criada com sucesso! Redirecionando...
                <?php endif; ?>
            </div>

            <p class="login-option">
                Já criou uma conta?
                <a href="/api/cadastro_de_usuarios/login">Login</a>
            </p>
        </form>
    </div>
</main>

<!-- JS SEMPRE NO FINAL -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const sucesso = <?= json_encode($cadastro_sucesso) ?>;
    const token   = <?= json_encode($token) ?>;

    if (sucesso && token) {
        const res = document.getElementById('res');

        res.style.padding = '20px';
        res.style.background = '#57ff093f';
        res.style.color = '#9ba5a2ff';
        res.style.borderRadius = '10px';
        res.style.display = 'flex';
        res.style.alignItems = 'center';
        res.style.gap = '10px';

        setTimeout(() => {
            window.location.href = `escolher_foto.php?token=${token}`;
        }, 3000);
    }
});
</script>

</body>
</html>
