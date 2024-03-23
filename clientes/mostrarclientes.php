<?php
$con=mysqli_connect("localhost", "root", "", "clientes"); 
$a=mysqli_query($con, "select * from clientes");?>
<!doctype html>
<html> <head> <meta charset="utf-8">
<title>mostrar datos clientes</title>
</head>
    <body>
    <table border="3">
<tr>
<td>documento</td>
<td>nombres</td>
<td>apellidos</td>
<td>telefono</td>
<td>direccion</td>
<td>idciudad</td>
<td>foto</td>
<td>ELIMINAR</td>

</tr>
 <?php while($s=mysqli_fetch_array($a)) { ?>
<tr>
<td><?php echo $s['documento'];?></td>
<td><?php echo $s['nombres']; ?></td>
<td><?php echo $s['apellidos']; ?></td>
<td><?php echo $s['telefono']; ?></td>
<td><?php echo $s['direccion']; ?></td> 
<td>
<?php 
    $b=mysqli_query ($con, "select * from clientes inner join ciudad on
    '$s[idciudad]'=ciudad.idciudad");
    $d=mysqli_fetch_array($b);
    echo $d['ciudad'];?>
    </td>
    <td><img src="<?php echo $s['foto']; ?>" width="50" height="50" ></td>
    <td><a href="elimcli.php?ec=<?php echo $s['documento']; ?>">eliminar</a>
</tr>
<?php }?>

</table>
</body>
</html>