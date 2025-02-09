<?php
//Incluye fichero con parámetros de conexión a la base de datos
include("config.php");

/*Obtiene el id del registro (trabajador) a eliminar a partir de su URL. Se envía el dato utilizando el método: GET (Se envía a través de la URL)
Recuerda que   existen dos métodos con los que el navegador puede enviar información al servidor:
1.- Método HTTP GET. Información se envía de forma visible. A través de la URL (header HTTP Request )
En PHP los datos se administran con el array asociativo $_GET.
2.- Método HTTP POST. Información se envía de forma no visible. A través del cuerpo del HTTP Request 
PHP proporciona el array asociativo $_POST para acceder a la información enviada.
*/

//Se obtienen los datos (name, surname, age y job) a partir del formulario de alta por el método POST (Se envía a través del body del HTTP Request. No aparecen en la URL)


$id = $_GET['id'];

//Se realiza el borrado del registro: delete.
$result = $mysqli->query("DELETE FROM empleados WHERE id = $id");

//Se cierra la conexión de base de datos previamente abierta
$mysqli->close();

//Se redirige a la página principal: index.php
header("Location:index.php");
?>