<?php
$password="";
$usuario="root";
$nombre_bd="crudsitofinal";

try{
    $bd=new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,$usuario,$password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
} catch (Exception $e){
    echo "Problema Con La Conexion:".$e->getMessage();
}
?>