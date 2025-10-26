<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../config/Conexao.php';
require_once __DIR__ . '/../Classes/Usuario.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /login');
    exit;
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_UNSAFE_RAW);

if (!$email || !$senha) {
    header('Location: /login?error=1');
    exit;
}

$user = new Usuario();

if ($user->login($email, $senha)) {
    header('Location: /index');
    exit;
} else {
    header('Location: /login?error=2');
    exit;
}