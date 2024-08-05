# Rename and Compress (rc)
Sistema em php que renomeia e comprime as imagens de uma pasta

## Comandos Docker

```bash
docker-compose up -d
```

```bash
docker container exec  rc-app composer update
```

```bash
docker-compose down
```

## Alterar Configurações

Alterar configurações do arquivo config.php conforme a configuração

## Extras

- Apagar arquivos do MAC pra não enviar no Git

```bash
find . -name '.DS_Store' -delete
```

- Alterar informações do php.ini como memória
```bash
docker container exec rc-app cp /var/www/html/server-config/php.ini /usr/local/etc/php
```

## Suporte

###### Qualquer dúvida ou problema envie um e-mail para silveira.jedi@gmail.com... Enjoy ;)

## Créditos

- [Leandro Silveira](https://github.com/silveirajedi) (Developer)

## Licença

The MIT License (MIT).