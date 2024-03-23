<?php
include('conexion.php');
$a=$_GET['s'] 
$f=mysqli_query($conn, "delete from ciudad where idciudad='$a' ");
if(!$f) 
    {echo "no se borro los datos de la ciudad";}
else 

echo "datos borrados";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar ciudad</title>
</head>
<body>
<a href="mostrarciudad.php">regresar</a>
</body>
</html>