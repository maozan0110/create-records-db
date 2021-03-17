<?php
$dealer = $_REQUEST["dealer"];
echo $dealer;

$coordinator = $_REQUEST["coordinator"];
echo $coordinator;

$estate = $_REQUEST["estate"];
echo $estate;

// conectar bbdd

$host = "localhost";
$dbname = "contractors_claro";
$username = "root";
$password = "";

// conexion

$cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//sentencia sql para ingresar datos a la tabla

$sql = "INSERT INTO allocation (id,id_Dealer,id_Coordinator,Estate) VALUES (NULL,'$dealer','$coordinator','$estate')";


$q = $cnx->prepare($sql);

$result = $q->execute();

if($result){
    echo "allocation save OK";

}
else { 
    echo "there was an error creating the allocation $dealer";
    
}



?>