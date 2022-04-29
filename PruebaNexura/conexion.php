<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$bd = 'prueba_tecnica_dev';

$conex = mysqli_connect($contrasena, $usuario, $servidor);


if (!$conex)
{
    die ('<strong> No es posible la conexión con la base de datos:</strong>'.mysql_error());
}/*else{
    echo ('conexión con base de datos exitosa' );  
}*/
mysqli_select_db($conex, $bd)  or die (mysql_error($conex));

?>
