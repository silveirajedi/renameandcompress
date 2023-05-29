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
        //Chamar Função
        renomear(DIRETORIO, NOVONOME);

        function renomear($dir, $nomeBase, $contador = 1)
        {
            $files = scandir($dir);

            foreach ($files as $file) {
                // Verificar se é um arquivo de imagem válido
                if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                    // Obter o caminho completo do arquivo
                    $caminhoCompleto = $dir . "/" . $file;

                    // Gerar o novo nome do arquivo
                    $novoNome = $nomeBase . $contador . '.' . pathinfo($file, PATHINFO_EXTENSION);

                    // Renomear o arquivo
                    if (rename($caminhoCompleto, $dir . "/" . $novoNome)) {
                        echo 'O arquivo ' . $file . ' foi renomeado para ' . $novoNome . '<br>';
                    } else {
                        echo 'Erro ao renomear o arquivo ' . $file . '<br>';
                    }

                    // Incrementar o contador
                    $contador++;
                }
            }
        }
    ?>
<p><a href="index.php">Voltar</a></p>

</body>
</html>