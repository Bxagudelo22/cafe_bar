<?php

$host='localhost';
$db='coffee_bar_db';
$user='root';
$pass='';
$conn=new mysqli(hostname: $host, username: $user, password: $pass, database: $db);
if($conn->connect_error){
    die("conexion fallida".$conn->connect_error);
}
else{
    echo "conexion exitosa";
}










?>