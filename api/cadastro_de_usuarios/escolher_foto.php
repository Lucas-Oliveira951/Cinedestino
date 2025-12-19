<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("conexao.php");

$mensagem = null;
$tipo = null;
$redirect = null;

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
$mensagem = null;
$tipo = null;
$redirect = null;
}

$supabaseUrl = $_ENV['SUPABASE_URL'];
$serviceKey = $_ENV['SUPABASE_SERVICE_KEY'];


if (!isset($_GET['token'])) {
    die("Acesso negado.");
}

$token = $_GET['token'];

$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE token_cadastro = :token");
$stmt->execute([':token' => $token]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    die("Token inválido ou expirado.");
}

$id_usuario = $usuario['id'];

function uploadSupabase($tmpFile, $nomeArquivo, $mimeType)
{
    $supabaseUrl = $_ENV['SUPABASE_URL'];
    $serviceKey  = $_ENV['SUPABASE_SERVICE_KEY'];

    $bucket = 'fotos-perfil';
    $path   = "usuarios/$nomeArquivo";

    $url = "$supabaseUrl/storage/v1/object/$bucket/$path?upsert=true";

    $file = file_get_contents($tmpFile);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS    => $file,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $serviceKey",
            "Content-Type: $mimeType"
        ]
    ]);

    $response = curl_exec($ch);
    $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if (!in_array($status, [200, 201, 204])) {
        return false;
    }

    return "$supabaseUrl/storage/v1/object/public/$bucket/$path";
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto_perfil'])) {

    if (!isset($_FILES['foto_perfil']) || $_FILES['foto_perfil']['error'] !== UPLOAD_ERR_OK) {
        die("Erro no envio do arquivo");
    }

    $foto_perfil = "/../foto_nao_definida/default.png";

    $ext = strtolower(pathinfo($_FILES['foto_perfil']['name'], PATHINFO_EXTENSION));
    $permitidos = ['jpg', 'jpeg', 'png'];

    if (!in_array($ext, $permitidos)) {
        die("Formato inválido");
    }

    $nomeArquivo = uniqid() . ".$ext";

    $urlFoto = uploadSupabase(
        $_FILES['foto_perfil']['tmp_name'],
        $nomeArquivo,
        $_FILES['foto_perfil']['type']
    );

    if (!$urlFoto) {
        die("Erro ao salvar imagem!");
    }

    $stmt = $pdo->prepare(
        "
        UPDATE usuarios
        SET foto_perfil = :foto,
            token_cadastro = NULL
        WHERE id = :id"
    );
    $stmt->execute([
        ':foto' => $urlFoto,
        ':id' => $id_usuario
    ]);
}

    $mensagem = "<i class='fa-solid fa-circle-check'></i> Foto salva com sucesso!";
    $tipo = "sucesso";
    $redirect = "../login.php"

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
            <form action="escolher_foto.php?token=<?= htmlspecialchars($_GET['token']) ?>" method="post" enctype="multipart/form-data">
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
                <div id="res" data-tipo="<?= $tipo ?>" data-redirect="<?= $redirect ?>">
                    <?= $mensagem ?>
                </div>
            </form>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const res = document.getElementById('res');

            if (!res || !res.textContent.trim()) return;

            if (res.dataset.tipo === 'sucesso') {
                res.style.padding = '20px';
                res.style.background = '#57ff093f';
                res.style.borderRadius = '10px';
                res.style.display = 'flex';
                res.style.alignItems = 'center';
                res.style.gap = '10px';
            }

            if (res.dataset.redirect) {
                setTimeout(() => {
                    window.location.href = res.dataset.redirect;
                }, 3000);
            }
        });
    </script>

    <script src="/../assets/JavaScript/previewFoto.js"></script>
</body>

</html>
