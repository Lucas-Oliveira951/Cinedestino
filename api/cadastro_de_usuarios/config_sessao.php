<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * CONFIGURAÇÃO OBRIGATÓRIA PARA VERCEL
 */
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
