<?php
require_once __DIR__ . "/conexao.php";


if (!isset($_COOKIE['token_login'])) {
    header("Location: login.php");
    exit;
}

$token = $_COOKIE['token_login'];


$stmt = $pdo->prepare("
    UPDATE usuarios
    SET token_login = NULL
    WHERE token_login = :token
    ");
$stmt->execute([':token' => $token]);

$secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off');

setcookie('token_login', '', [
    'expires' => time() - 3600,
    'path' => '/',
    'secure' => $secure,
    'httponly' => true,
    'samesime' => 'Lax'
]);

header("Location: login.php?logout=1");
exit;
