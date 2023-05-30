<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renomeando...</title>
</head>
<body>

<?php
require __DIR__ . "/config.php";
//Chamar Função
converter(DIRETORIO, NOVONOME);

function converter($dir, $nomeBase, $contador = 1)
{
    $files = scandir($dir);

    foreach ($files as $file) {
        // Verificar se é um arquivo de imagem PNG válido
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['png'])) {
            // Obter o caminho completo do arquivo
            $pngFile = $dir . "/" . $file;

            //Carrega a imagem PNG
            $image = imagecreatefrompng($pngFile);

            //Caminho para salvar a imagem JPEG
            $jpgFile = JPGFILES . "/" . $nomeBase . $contador . '.jpg';

            //Cria uma nova imagem em branco com as mesmas dimensões
            $newImage = imagecreatetruecolor(imagesx($image), imagesy($image));

            //Copia a imagem PNG para a nova imagem JPEG
            imagecopy($newImage, $image, 0, 0, 0 , 0, imagesx($image), imagesy($image));

            // Salva a nova imagem JPEG
            imagejpeg($newImage, $jpgFile, 70);

            echo 'Convertido ' . $nomeBase . $contador . '.jpg' . ' com sucesso! ' . '<br>';

            //Libera Memória
            imagedestroy($image);
            imagedestroy($newImage);

            // Incrementar o contador
            $contador++;
        }
    }
}
?>
<p><a href="index.php">Voltar</a></p>

</body>
</html>