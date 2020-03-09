<?php
/**
 * Para el desarrollo puedes utilizar el usuario root para logearte dentro de a base de datos
 * pero en produccion debes asignar/crear un usuario con los roles de CRUD solamente
 * C->create
 * R->read
 * U->update
 * D->delete
 * esto para que no puedan eliminar o crear otras tabllas o bases de datos dentro de tu servidor
 */


// Nombre del  dominio o ip donde se encuentra el servidor de base de datos
$host="localhost";
// Nombre de la base de datos
$DB_name="andras";
// usuario de conexion a la base de datos
$user="root";
// password de conexion a la base de datos
$pass="";
// String de conexion a la base de datos
$dsn        = "mysql:host=$host;dbname=$DB_name";
// opciones para la conexion
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>
