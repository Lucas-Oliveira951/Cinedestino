<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

ini_set('session.cookie_path', '/');
ini_set('session.cookie_samesite', 'Lax');
ini_set('session.cookie_secure', isset($_SERVER['HTTPS']) ? '1' : '0');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
