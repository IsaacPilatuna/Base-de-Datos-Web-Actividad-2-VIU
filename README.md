## Requisitos
- Composer
- Base de datos MongoDB
- Robo 3T / Studio 3T

## Preparación DB
- En la base de datos MongoDB crear la base 'recursos_social'
- Utilizando la herramienta Robo 3T ejecutar el script fisico.js para crear la(s) coleccion(es)
- Utilizando la herramienta Robo 3T ejecutar el script inserts.js para insertar los datos en las colecciones

## Instalación de dependencias
- En la raíz del proyecto ejecutar el siguiente comando, para instalar las despendencias de MongoDB para PHP
```markdown
composer install
```
- En caso de necesitar el archivo .dll se lo puede descargar del sitio:
```markdown
https://pecl.php.net/package/mongodb
```

## Configuración de conexión a la base de datos

- En el archivo index.php configurar los parámetros de acceso a la base de datos
    - Host
    - Usuario
    - Contraseña

- En caso de requerir acceso a la base de datos de la nube (debido a que se debe especificar la ip en el firewall), solicitar acceso mediante correo electrónico a:
```markdown
ipilatunazambrano@alumnos.viu.es
```



