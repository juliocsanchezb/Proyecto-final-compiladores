Requisitos previos
•	XAMPP 7.x o superior
•	Apache y MySQL activos
•	Script SQL incluido
•	Usuario MySQL: root
Instalación del proyecto
1.	Clona o descarga el repositorio.
2.	Copia la carpeta del proyecto en:
3.	C:\xampp\htdocs\
4.	Inicia Apache y MySQL desde XAMPP.
Configuración de la base de datos (MySQL en puerto 1414)
1. Confirmar el puerto
En XAMPP: MySQL → Config → my.ini
Verifica que incluya:
[mysqld]
port=1414
2. Acceder a phpMyAdmin
http://localhost/phpmyadmin/?server=1414
Si no conecta, edita:
C:\xampp\phpMyAdmin\config.inc.php
y ajusta:
$cfg['Servers'][$i]['port'] = '1414';
3. Importar la base de datos
1.	En phpMyAdmin, selecciona Importar.
2.	Carga el archivo SQL del proyecto.
4. Configurar credenciales en el proyecto
$host = '127.0.0.1:1414'; 
$user = 'root';
$password = '';
$db = 'compiladoresfinal';
Obtener la URL del proyecto
Si el proyecto está dentro de htdocs, la ruta será:
http://localhost/proyecto_final_compliadores/home/
Para verificar:
1.	Abre:
2.	http://localhost/
3.	Busca la carpeta del proyecto.
Ejecución del sistema
1.	Inicia Apache y MySQL.
2.	Verifica que el sistema se conecta correctamente a la base de datos.
3.	Accede en el navegador:
4.	http://localhost/proyecto_final_compliadores/home /
