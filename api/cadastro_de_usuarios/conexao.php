<?php

$host = $_ENV['DB_HOST'] ?? null;
$db   = $_ENV['DB_NAME'] ?? null;
$user = $_ENV['DB_USER'] ?? null;
$pass = $_ENV['DB_PASS'] ?? null;
$port = $_ENV['DB_PORT'] ?? 5432;

if (!$host || !$db || !$user || !$pass) {
    echo 'Variáveis de ambiente não carregadas';
    exit;
}

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$db;sslmode=require",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_TIMEOUT => 5
        ]
    );

    echo 'Conectado com sucesso';
} catch (PDOException $e) {
    echo 'ERRO PDO: ' . $e->getMessage();
    exit;
}
