<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Credenciales de la base de datos en MySQL */
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','loginphp');

/*Intento de Conexion con Base de Datos MySQL*/
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

/*Check de la conexion */
if($link === false){
    die("Error: No se pudo conectar" . mysqli_connect_error());
  
}
?>