<?php

// conectar bbdd

$host = "localhost";
$dbname = "contractors_claro";
$username = "root";
$password = "";

// conexion

$cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//sentencia sql para ingresar datos a la tabla

$sql = "SELECT Name FROM dealers";

$q = $cnx->prepare($sql);

$result = $q->execute();

$dealers = $q->fetchAll();

$sql = "SELECT Name FROM coordinator";

$q = $cnx->prepare($sql);

$result = $q->execute();

$coordinator = $q->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Create enrollment</title>
</head>
<body>
<form action="save-enrollment.php" method ="POST">

Dealer      
<select name="dealers"><br>

Coordinator      
<select name="coordinator"><br>

<?php
for($i=0; $i<count($dealers); $i++){
?>   
<option value="<?php echo $dealers[$i]["Name"] ?>">
              
</option>

<?php
}
?>

<?php
for($i=0; $i<count($coordinator); $i++){
?>   
<option value="<?php echo $coordinator[$i]["Name"] ?>">
              
</option>

<?php
}
?>


Estate  

<input type="radio" name="estate" value="0"/> OK 
<input type="radio" name="estate" value="1"/> KO






<input type="submit" value="create enrollment"> </br>

</form>
</body>
</html>