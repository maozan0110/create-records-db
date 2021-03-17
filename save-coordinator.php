<?php
$name = $_REQUEST["name"];
echo $name;

$identification = $_REQUEST["identification"];
echo $identification;

// conectar bbdd

$host = "localhost";
$dbname = "contractors_claro";
$username = "root";
$password = "";

// conexion

$cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//sentencia sql para ingresar datos a la tabla

$sql = "INSERT INTO coordinator (id,name,identification) VALUES (NULL,'$name','$identification')";


$q = $cnx->prepare($sql);

$result = $q->execute();

if($result){
    echo "coordinator save OK";

}
else { 
    echo "there was an error creating the student $name";
    
}



?>