<?php

require_once 'Usuario.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  

  $user = new Usuario();

  if($user->login($email, $senha)){
    echo "Login efetuado com sucesso!!";
  }else{
    echo "Email ou senha esta incorreta!!";
  }

}