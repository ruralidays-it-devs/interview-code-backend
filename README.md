# Prueba técnica para Developer Backend

El objetivo de la prueba es comprobar el conocimiento y las habilidades del candidato trabajando con el framework php Symfony y enfocado al desarrollo de API REST.

No es necesario tener Docker Desktop, pero si es muy recomendado. El contenedor de nginx y php configurado en el docker-compose de este repositorio tiene todo lo necesario para poder realizar la prueba sin problemas. Versión de php y librerías requeridas, cliente de symfony y composer instalado. 

El código ubicado en el directorio `app/` es una instalación limpia de Symfony v5.4, así como algún fichero necesario que hemos creado para poder realizar la prueba.

Recomendamos trabajar sobre la rama `dev`, así como los pull request se hagan también a `dev`


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

    `[GIT_REPO_ROOT_DIR]/app/`
    

Requerimientos:
---------------
Los requerimientos serán enviados via email al candidato minutos antes de comenzar la prueba.


Duración y finalización de la prueba
------------------------------------
La prueba tendrá una duración de 2 horas. Una vez finalizada la prueba puedes hacer un pull request con los cambios realizados.

Suerte!

