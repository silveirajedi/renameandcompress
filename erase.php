<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apagando...</title>
</head>
<body>
<?php
require __DIR__ . "/config.php";

// Verifica se o diretório images existe
echo "<p>Apagando imagens: Diretório <b>images</b>...</p>";
if (is_dir(DIRETORIO)) {
    // Abre o diretório
    if ($handle = opendir(DIRETORIO)) {
        // Itera sobre os arquivos no diretório
        while (($file = readdir($handle)) !== false) {
            // Verifica se é um arquivo e se é uma imagem
            if (is_file(DIRETORIO . '/' . $file) && getimagesize(DIRETORIO . '/' . $file)) {
                // Exclui o arquivo
                unlink(DIRETORIO . '/' . $file);
                echo 'Arquivo excluído: ' . $file . '<br>';
            }
        }
        // Fecha o manipulador do diretório
        closedir($handle);
    }
} else {
    echo 'O diretório não existe.';
}

// Verifica se o diretório cache existe
echo "<p>Apagando imagens: Diretório <b>cache</b>...</p>";
if (is_dir(CACHE)) {
    // Abre o diretório
    if ($handle = opendir(CACHE)) {
        // Itera sobre os arquivos no diretório
        while (($file = readdir($handle)) !== false) {
            // Verifica se é um arquivo e se é uma imagem
            if (is_file(CACHE . '/' . $file) && getimagesize(CACHE . '/' . $file)) {
                // Exclui o arquivo
                unlink(CACHE . '/' . $file);
                echo 'Arquivo excluído: ' . $file . '<br>';
            }
        }
        // Fecha o manipulador do diretório
        closedir($handle);
    }
} else {
    echo 'O diretório não existe.';
}

// Verifica se o diretório cache existe
echo "<p>Apagando imagens: Diretório <b>jpgfiles</b>...</p>";
if (is_dir(JPGFILES)) {
    // Abre o diretório
    if ($handle = opendir(JPGFILES)) {
        // Itera sobre os arquivos no diretório
        while (($file = readdir($handle)) !== false) {
            // Verifica se é um arquivo e se é uma imagem
            if (is_file(JPGFILES . '/' . $file) && getimagesize(JPGFILES . '/' . $file)) {
                // Exclui o arquivo
                unlink(JPGFILES . '/' . $file);
                echo 'Arquivo excluído: ' . $file . '<br>';
            }
        }
        // Fecha o manipulador do diretório
        closedir($handle);
    }
} else {
    echo 'O diretório não existe.';
}

?>
<p><a href="index.php">Voltar</a></p>

</body>
</html>