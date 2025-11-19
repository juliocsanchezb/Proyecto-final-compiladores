
# Requisitos Previos

Para ejecutar correctamente este proyecto en un entorno local con XAMPP, es necesario contar con lo siguiente:

- XAMPP 7.x o superior  
- Servidor Apache activo  
- Servidor MySQL activo  
- MySQL configurado para correr en el puerto **1414**  
- Archivo SQL del proyecto para importar la base de datos  
- Usuario MySQL: **root** (sin contraseña por defecto en XAMPP)  
- Carpeta del proyecto ubicada dentro de `htdocs`  

# Instalación del Proyecto

1. Clona o descarga el repositorio del proyecto en tu equipo.

2. Copia la carpeta del proyecto dentro del directorio:
```

C:\xampp\htdocs\

```

3. Inicia **Apache** y **MySQL** desde el panel de control de XAMPP.

4. Verifica que MySQL esté configurado en el puerto 1414 revisando el archivo:
```

C:\xampp\mysql\bin\my.ini

```
Debe contener:
```

[mysqld]
port=1414

```

5. Accede a phpMyAdmin usando:
```

[http://localhost/phpmyadmin/?server=1414](http://localhost/phpmyadmin/?server=1414)

```

6. Importa la base de datos:
- Ingresa a phpMyAdmin  
- Selecciona **Importar**  
- Carga el script `.sql` incluido en el proyecto  

7. Configura las credenciales de conexión a la base de datos dentro del archivo de configuración del proyecto (por ejemplo `.env`, `config.php` o similar):
```

$host = '127.0.0.1:1414'; 
$user = 'root';
$password = '';
$db = 'compiladoresfinal';

```

8. Accede al proyecto desde el navegador usando:
```

[http://localhost/proyecto_final_compliadores/home/index.php/](http://localhost/proyecto_final_compliadores/home/index.php)

```
```

