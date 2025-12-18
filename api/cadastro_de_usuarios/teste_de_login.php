<?php

require_once "conexao.php";
echo '<pre>';
var_dump($_POST);
exit;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if (!$email || $senha) {
    header("Location: login.php?erro=campos");
    exit;
}

$stmt = $pdo->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = :email LIMIT 1");
$stmt->execute([':email' => $email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario || !password_verify($senha, $usuario['senha'])) {
    header("Location: login.php?erro=login");
    exit;
}


setcookie(
    'auth_token',
    $token,
    time() + 86400, //1 dia
    '/',
    '',
    isset($_SERVER['HTTPS']),
    true
);

header("Location: /api/cinedestino.php");
exit;
