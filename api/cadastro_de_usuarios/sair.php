<?php
require_once __DIR__ . "/conexao.php";


if (!isset($_COOKIE['auth_token'])) {
    header("Location: login.php");
    exit;
}

$token = $_COOKIE['auth_token'];


$stmt = $pdo->prepare("
    UPDATE usuarios
    SET token_login = NULL
    WHERE token_login = :token
    ");
$stmt->execute([':token' => $token]);


setcookie(
    'auth_token',
    '',
    time() - 3600,
    '/',
    '',
    isset($_SERVER['HTTPS']),
    true
);

header("Location: login.php?logout=1");
exit;
