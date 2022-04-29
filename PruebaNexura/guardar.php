<!-- Almacenamiento de datos en BD -->
<?php include 'conexion.php';?>
<?php
    
$sql = "INSERT INTO empleado(id, nombre, email, sexo, area_id, boletin, descripcion) VALUES ('9','juanma','juanma@prueba.com','M','2','1','prueba')";


if (mysqli_query($conex, $sql)) {
     echo "Operación exitosa";
}
else {
     echo "Error: " . $sql . "<br>" . mysqli_error();
}

mysqli_close($conex); 

