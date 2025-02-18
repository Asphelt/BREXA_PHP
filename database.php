<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$database = "brexa";

$db = mysqli_connect($servername, $username, $password, $database);

if(!$db){
    print("Error al conectar a la base de datos"); 
}