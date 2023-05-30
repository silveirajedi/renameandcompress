<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compactando...</title>
</head>
<body>
    <?php
        require __DIR__ . "/config.php";
        require __DIR__ . "/vendor/autoload.php";

        use \CoffeeCode\Cropper\Cropper;

        $image = new Cropper(CACHE);

        $dir = JPGFILES;
        $files = scandir($dir);

        foreach ($files as $file) {
            // Verificar se é um arquivo de imagem válido
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                // Obter o caminho completo do arquivo
                $imagePatch = $dir . "/" . $file;
                echo "<img src='{$image->make($imagePatch, WIDTH)}'>";
            }
        }
    ?>
<p><a href="index.php">Voltar</a></p>

</body>
</html>