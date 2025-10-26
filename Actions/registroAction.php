<?php

require_once __DIR__ . '/../Classes/Usuario.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /criar');
    exit;
}

$nome = preg_replace("/[^a-zA-ZÀ-ÿ\s]/", "", $_POST['nome'] ?? '');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_UNSAFE_RAW);

if (!$nome || !$email || !$senha) {
    header('Location: /criar?error=1');
    exit;
}

$user = new Usuario();
if ($user->registrar($nome, $email, $senha)) {
    // auto-login após registro
    if ($user->login($email, $senha)) {
        header('Location: /index');
        exit;
    }
    // se login automático falhar, redirecionar para login com mensagem
    header('Location: /login?created=1');
    exit;
} else {
    header('Location: /criar?error=2');
    exit;
}