<?php

session_start();

if (isset($_POST['email'])) {

    include("conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_consulta = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    $sql_exec = $mysqli->query($sql_consulta) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['senha'] = $usuario['senha'];
    $_SESSION['id_usuario'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];

    if (password_verify($senha, $usuario['senha'])) {

        echo "Logado com sucesso!";

        header('Location: login.php?sucesso=1');
        //exit;
    } else {
        echo "Falha ao logar!";

        header('Location: login.php?erro=1');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
