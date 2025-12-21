<?php
require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

if (!$email || !$senha) {
    header("Location: login.php?erro=campos");
    exit;
}



$token = bin2hex(random_bytes(32));

$update = $pdo->prepare("
    UPDATE usuarios 
    SET token_login = :token 
    WHERE id = :id
");
$update->execute([
    ':token' => $token,
    ':id'    => $usuario['id']
]);

$secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

setcookie('token_login', $token, [
    'expires'  => time() + 86400,
    'path'     => '/',
    'secure'   => $secure,
    'httponly' => true,
    'samesite' => 'Lax'
]);


$stmt = $pdo->prepare("
    SELECT id, senha 
    FROM usuarios 
    WHERE email = :email 
    LIMIT 1
");
$stmt->execute([':email' => $email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario || !password_verify($senha, $usuario['senha'])) {
    header("Location: login.php?erro=1");
    exit;
} else {
    header("Location: login.php?sucesso=1");
    exit;
}

//header("Location: /api/cinedestino.php");
//exit;
