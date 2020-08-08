# PRUEBA DESARROLLADOR WEB


Este proyecto está hecho con laravel 7 y vue. Para poder utilizarlo es necesario tener instaladas las siguientes dependencias: 


- PHP >= 7.2.5
- <a href="https://getcomposer.org/">Composer</a>
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mb1string PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- <a href="https://nodejs.org/es/">Node.js</a>

El entorno de desarrollo que se utilizó para este proyecto es <a href="https://laragon.org/download/index.html">LARAGON</a> el cual ya viene con toda la dependencia necesaria para comenzar a desarrollar. Es el que se recomienda utilizar para la prueba, aunque cualquier otro entrono de desarrollo que tenga todas las dependencias anteriormente mencionadas podrá correr la aplicación.

## Como correr la aplicación  
1. Primero debemos copiar el archivo .env.example y renombrarlo como .env.Lo pegamos en la carpeta raíz del proyecto
2. Abrimos una terminal dentro de la raíz del proyecto.  
3. Luego ejecutamos el siguiente comando composer install --optimize-autoloader --no-dev
4. Una vez termine de instalarse nuestras dependencias ejecutamos el comando php artisan key:generate
5. Después debemos instalar nuestras dependencias para vue atrás ves del comando npm install && run dev
6. Ejecutamos en la terminal el comando php artisan serve y nos dirigimos a un navegador. Dentro de la barra de búsqueda colocamos localhost:8000
