<?php
include_once("conexao.php");

//verifica se o usuario enviou o formulario
if (isset($_POST['enviar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // consulta para salvar as informações do usuario no banco de dados
    $consulta_cadastro = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($consulta_cadastro);
    $sucesso = $stmt->execute([
                   ':nome' => $nome,
                   ':email' => $email,
                   ':senha' => $senha,
                   ]);

    if ($sucesso) {

        $id_usuario = $pdo->lastInsertId();

        session_start();
        $_SESSION['cadastro_id'] = $id_usuario; // guarda o ID do usuário recém cadastrado

        echo "<script> 

       //espera o html carregar todo
       document.addEventListener('DOMContentLoaded', () => {

       const res = document.getElementById('res');
        
        // mensagem de conta criada com sucesso
        res.style.padding = '20px'
        res.style.background = '#57ff093f'
        res.style.color = '#9ba5a2ff'
        res.style.color = '10px'
        res.style.borderRadius = '10px'
        res.style.display = 'flex'
        res.style.alignItems = 'center'
        res.style.gap = '10px'
        res.innerHTML = `<i class='fa-solid fa-circle-check'></i> Conta Criada com sucesso! Redirecionando...`
        
        //mantem o usuario por tres segundos na pagina de cadastro e depois redireciona ele para pagina de escolher a foto para a conta
        setTimeout(function() {
        window.location.href = 'escolher_foto'; 
        }, 3000);

       });

        </script>";
    } else {
        echo "<p>Erro ao cadastrar!" . $stmt->error . "</p>";
    }

    $stmt = null;
    //$pdo = null;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/../assets/Image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/../assets/css/cadastro.css">
    <title>Criar Conta</title>
</head>

<body>
    <main class="conteudo">
        <div class="container-login">
            <form action="formulario_de_cadastro.php" method="post" enctype="multipart/form-data">
                <h1>Crie sua conta gratuita</h1>

                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="inputUser" placeholder="Insira seu nome completo aqui." required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="inputUser" placeholder="Digite seu e-mail aqui." required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="Senha" class="inputUser" placeholder="Digite sua senha aqui." required>

                <input type="submit" id="Button" name="enviar" onclick="Criar()" value="Criar uma conta">
                <div id="res">

                </div>
                <p class="login-option">Já criou uma conta? <a href="/../api/cadastro_de_usuarios/login">Login</a></p>
            </form>
        </div>
    </main>

    <script src="/../assets/JavaScript/cadastro.js"></script>
</body>


</html>
