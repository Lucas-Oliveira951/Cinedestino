<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('session.cookie_path', '/');
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_samesite', 'Lax');

session_start();

include("conexao.php");

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
    SELECT id, nome, email, senha, foto_perfil
    FROM usuarios 
    WHERE email = :email
    LIMIT 1
    ");
$stmt->execute([':email' => $email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($usuario);
//exit;

if (!$usuario || !password_verify($senha, $usuario['senha'])) {
    header("Location: login.php?erro=login");
    exit;
}


$_SESSION['id_usuario'] = $usuario['id'];
$_SESSION['nome'] = $usuario['nome'];
$_SESSION['email'] = $usuario['email'];
$_SESSION['foto_perfil'] = $usuario['foto_perfil'];

header("Location: /api/cinedestino.php");
exit;
