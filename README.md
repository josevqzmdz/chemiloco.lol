Bienvenidos a mi pagina web, chemiloco PUUUUNTOOOO lol.

Es un WIP permanente puesto que no solo lo utilizo para presentarme antes los trabajos y empresas, pero tambien tengo varias ideas para subir aqui, como mis partituras en musescore (gracias a dios por el codigo abierto).

1) gettext y demas:
Mi meta con este proyecto es tener, no solo un portal web para los idiotas que estan a cargo de recursos humanos, sino tambien un blog personal. Pero vamos por pasos, le hago la emocion que hablo 5 idiomas y hay que tener todo en orden. Al parecer, gettext es la mejor opcion para el estandar i18n.

Se asume trabajas en el directorio raiz del proyecto, al menos que se indique lo contrario. Y que utilizas alguna distro de linux (yo use ubuntu).

Despues de hacer la configuracion basica, composer install, php artisan key:generate, etc. Tienes que descargar estas librerias.

sudo apt install php-pear
pecl channel-update pecl.php.net
sudo apt-get install php8.3-dev
sudo install apcu
sudo pecl channel-update pecl.php.net
echo "extension=apcu.so" >> 'php --ini | grep "loaded configuration" | sed -e "s|.*:\s*||"'
sudo apt-get install php8.3-apcu

https://stackoverflow.com/questions/34170434/how-install-apcu-as-php7-extension-on-debian

ahora instalaremos la extension nativa de gettext() para php:

    1.- vamos a crear uno archivo index.php en la carpeta raiz y escribimos dentro de el:

    <?
        echo _("gutten morgen hijos de la verga");
    ?>

ahora ejecutamos:

sudo xgettext -n index.php

Se acaba de crear un archivo llamado "messages.po" en la carpeta raiz. Vamos a elegir nuestros idiomas ahi, borren lo que esta despues de "language-team" e ingresen los lenguajes de su eleccion. En mi caso, el archivo debe verse como:

# 1) spanish

"Language: es\n"
"Content-Type: text/plain; charset=UTF-8\n"

# 2) english

"Language: en\n"
"Content-Type: text/plain; charset=UTF-8\n"

# 3) french

"Language: fr\n"
"Content-Type: text/plain; charset=UTF-8\n"

# 4) german

"Language: de\n"
"Content-Type: text/plain; charset=UTF-8\n"

# 5) portuguese

"Language: pt\n"
"Content-Type: text/plain; charset=UTF-8\n"



