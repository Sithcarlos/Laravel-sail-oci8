## Acerca de este proyecto

Este es un proyecto que nació más que nada para hacer ejercicios de programación, esta pensado para conectarse a bases de datos Oracle
y utiliza Docker
ademas de programar Bot para Telegram

## Acerca de Oracle oci8

Para conectar el proyecto Laravel con bases de datos Oracle, se siguieron instrucciones desde la web oficial y se utilizaron recursos de la capa siempre gratis, agradezco a la tecnología Oracle sus respectivos derechos reservados
- Se debe validar la arquitectura del servidor
- Se instalo Docker engine, no hace falta el uso de interfaz gráfica
- Las pruebas de funcionamiento fueron realizadas en un servidor con SO Ubuntu 24.04 dando resultados favorables
- Se reviso el funcionamiento en arquitecturas aarch64 y x86_64 dando resultados favorables
- Se realizo pruebas en servidores Oracle Linux, al tener un SO base Red Hat se dificulto un poco la configuración pero no se descarta el correcto funcionamiento solo después de algunos ajustes.
- Se requiere descargar el instantclient desde la web oficial de Oracle
- En las pruebas se emplearon las versiones instantclient 21.17 e instantclient 23.7

## Instrucciones rápidas

- Antes de usar composer install, se debe omitir la instalación de yajra/laravel-oci8
- Al gusto se puede omitir la instalación de nutgram/laravel
- usar composer install
- Se debe editar el fichero generate-ssl-cert.sh y reemplazar en vendor/ryoluo/sail-ssl/nginx/generate-ssl-cert.sh
- Seguir las instrucciones para instalar oci8 brevemente descritas en el fichero docker/Dockerfile.example
- Leer sección Acerca de Oracle oci8 y después ejecutar sail build
- install yajra/laravel-oci8
- Configurar variables de autenticacion con la base de datos
- Navegar en localhost/db_test

## Acerca de Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Invitación a participar

Les invito a todo aquel que quiera mejorar este proyecto, bienvenidos todos.

## Contribuciones

- [Sithcarlos](https://github.com/Sithcarlos).
- Principales proyectos incluidos
- nutgram/laravel
Útil Para la comunicación con Telegram Bot API
- yajra/laravel-oci8
Útil para comunicar con bases de datos Oracle, se utiliza en conjunto con instantclient
- ryoluo/sail-ssl
Útil para instalar un certificado valido para webhook Telegram Bot API, leer fichero generate-ssl-cert.sh

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).