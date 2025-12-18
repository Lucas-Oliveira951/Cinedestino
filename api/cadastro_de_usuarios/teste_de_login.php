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

$stmt = $pdo->prepare("
    SELECT id, senha 
    FROM usuarios 
    WHERE email = :email 
    LIMIT 1
");
$stmt->execute([':email' => $email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario || !password_verify($senha, $usuario['senha'])) {
    header("Location: login.php?erro=login");
    exit;
}

$token = bin2hex(random_bytes(32));

$update = $pdo->prepare("
    UPDATE usuarios 
    SET auth_token = :token 
    WHERE id = :id
");
$update->execute([
    ':token' => $token,
    ':id'    => $usuario['id']
]);

setcookie('auth_token', $token, [
    'expires'  => time() + 86400,
    'path'     => '/',
    'secure'   => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);

header("Location: /api/cinedestino.php");
exit;
