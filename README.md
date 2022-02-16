Instalación:
------------

1. Clonar el repositorio https://github.com/ruralidays-it-devs/interview-code-backend.git

2. Si no está ya instalado, instala Docker Desktop.

3. Nos situamos en el directorio del proyecto y levantamos los contenedores:

    `docker-compose build`

    `docker-compose up -d`

4. Accedemos al contenedor de php:

    `docker-compose exec php bash`

5. Instalamos las librerias y dependencias con Composer:

    `composer install`

6. Ya tenemos disponible en `http://localhost` Symfony ejecutándose. Deberíamos ver la página de inicio de Symfony.

7. Los ficheros de la app de Symfony se encuentan en:
    [GIT_REPO_ROOT_DIR]/app/
    

Requerimientos:
---------------

Los requerimientos serán enviados via email al candidato minutos antes de comenzar la prueba.

