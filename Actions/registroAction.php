<?php

require_once "Usuario.php";

$user = new Usuario();

if($_SERVER["REQUEST_METHOD"] === "POST"){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

  if($user->registrar($nome, $email, $senha)){
    echo "Usuario cadastrado com sucesso";
  }else{
    echo "falha ao cadastrar usuario!!!";
  }
  
}
