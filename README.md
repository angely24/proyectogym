Proyecto que consta de implementación  laravel.

Para la utilización de este Ejercicio-Practico, se debe tener encuenta los siguientes parametros:

1. El proyecto esta basado en el lenguaje de programacion php el cual debe de correrce en un servidor local (XAMPP)

2. Para clonar nuestro repositorio hay que seleccionar un lugar en nuestro equipo que en mi caso es (C:\xampp\htdocs) y estando allí, vamos a nuestra consola e ingresamos el git clone de este proyecto.
Si lo descargamos, muevalo a su carpeta www o htdocs donde su servidor ejecute los proyectos con php.

3. Inicie el servidor

4. En nuestra consola despues de instalar nuestro proyecto debemos instalar las dependencias con (composer install) y (npm install).

5. Se debe craer una base de datos, la cual se debe pooner en el archivo .env.

6. Debemos configurar el entorno que se hace desde el archivo .env, que se debe copiar con el comando (copy .env.example .env), despues de que se copio el archivo .env, se debe configura el archivo para que quede acorde al ambiente que se va utilizar.

7. Migramos y "sembramos" la base de datos con el comando (php artisan migrate --seed).

8. Podemos visualizar nuestro proyecto asi: http://localhost/(nombre_de_como_se_guardo_el_proyecto)/public/

Proyecto realizado por: Andres Sanchez - Valentina Montenegro - Angely Rojas