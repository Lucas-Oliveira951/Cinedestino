<?php
require_once __DIR__ . "/cadastro_de_usuarios/conexao.php";


//Verifica se o usuario está autenticado
if (!isset($_COOKIE['token_login'])) {
    header("Location: /login.php");
    exit;
}

$token = $_COOKIE['token_login'];

$stmt = $pdo->prepare("SELECT id, nome, email, foto_perfil FROM usuarios WHERE token_login = :token LIMIT 1");
$stmt->execute([':token' => $token]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    //token inválido ou expirado --> limpa cookie
    setcookie('token_login', '', [
        'expires' => time() - 3600,
        'path' => '/',
        'secure' => isset($_SERVER['HTTPS']),
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    header("Location: /login.php");
    exit;
}
