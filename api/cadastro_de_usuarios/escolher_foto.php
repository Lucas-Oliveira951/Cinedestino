<?php
include_once("conexao.php");


if (!isset($_GET['token'])) {
    die("Acesso negado. Esta pagina só está disponível após o cadastro.");
}

$token = $_GET['token'];

$stmt = $pdo->prepare(
    "SELECT id FROM usuarios WHERE token_cadastro = :token"
);
$stmt->execute([
               ':token' => $token
]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$usuario) {
    die("token inválido ou expirado");
}

$id_usuario = $usuario['id'];


if (isset($_GET['erro']) && $_GET['erro'] == "foto_grande") {

    //mensagem de imagem muito grande
    echo "<script> 
       document.addEventListener('DOMContentLoaded', () => {
       const res = document.getElementById('res');

        res.style.padding = '20px'
        res.style.background = '#dd08083f'
        res.style.color = '#9ba5a2ff'
        res.style.color = '10px'
        res.style.borderRadius = '10px'
        res.style.display = 'flex'
        res.style.alignItems = 'center'
        res.style.gap = '10px'
        res.innerHTML = `<i class='fa-solid fa-circle-xmark'></i> Imagen muito grande! Tamanho máximo: 10MB`
       });

        </script>";
}




if (isset($_POST['enviar'])) {

    $foto_perfil = "/../foto_nao_definida/default.png";

    // verifica Se enviou uma foto
    if (!empty($_FILES['foto_perfil']['name'])) {
        $extensao = strtolower(pathinfo($_FILES['foto_perfil']['name'], PATHINFO_EXTENSION));
        $permitidos = ['jpg', 'jpeg', 'png'];

        if (in_array($extensao, $permitidos)) {
            if ($_FILES['foto_perfil']['size'] <= 10 * 1024 * 1024) { // 10MB
                $arquivo = "foto_definida/" . uniqid() . "." . $extensao;

                if (move_uploaded_file($_FILES['foto_perfil']['tmp_name'], $arquivo)) {
                    $foto_perfil = $arquivo; // salva caminho da foto
                } else {
                    echo "<p>Erro ao salvar a imagem.</p>";
                }
            } else {
                header("Location: escolher_foto.php?erro=foto_grande");
                exit;
            }
        } else {
            echo "<p>Formato inválido. Apenas JPG e PNG são permitidos.</p>";
        }
    }

    $salvar_foto = "UPDATE usuarios SET foto_perfil = :foto WHERE id = :id";
    $stmt = $pdo->prepare($salvar_foto);
    $salvar_foto->execute([
                   ':foto' => $foto_perfil,
                    ':id' => $id_usuario
    ]);

    if ($salvar_foto->execute([ ':foto' => $foto_perfil,
                    ':id' => $id_usuario])) {

        //remove o id da sessao
        unset($_SESSION['cadastro_id']);


        //mensagem de imagem enviada
        echo "<script> 
       document.addEventListener('DOMContentLoaded', () => {
       const res = document.getElementById('res');

        res.style.padding = '20px'
        res.style.background = '#57ff093f'
        res.style.color = '#9ba5a2ff'
        res.style.color = '10px'
        res.style.borderRadius = '10px'
        res.style.display = 'flex'
        res.style.alignItems = 'center'
        res.style.gap = '10px'
        res.innerHTML = `<i class='fa-solid fa-circle-check'></i> Imagen enviada! Indo para login...`


        //redireciona o usuario para login após 3 segundos
        setTimeout(function() {
        window.location.href = 'login.php'; 
        }, 3000);
       });

        </script>";
    } else {
        echo "erro ao salvar foto!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="/../assets/Image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/../assets/css/escolher_foto.css">
    <title>Escolher foto</title>
</head>

<body>
    <main class="conteudo">
        <div class="container-foto">
            <form action="escolher_foto.php" method="post" enctype="multipart/form-data">
                <div class="escolher-foto">
                    <label for="">Escolha uma foto para seu perfil:</label>
                    <div class="preview">
                        <img src="" alt="" id="preview" style="display: none; width: 200px; height: 200px; border-radius: 100%; object-fit: cover;">
                    </div>
                    <div class="botao-foto">
                        <input type="file" name="foto_perfil" id="foto" accept=".jpg,.jpeg,.png">
                        <p id="textoUpload">Selecionar foto</p>
                    </div>
                </div>
                <button type="submit" name="enviar" id="Button">Escolher foto</button>
                <div id="res">

                </div>
            </form>
        </div>
    </main>

    <script src="/../assets/JavaScript/previewFoto.js"></script>
</body>

</html>
