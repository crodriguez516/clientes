<?php
$con=mysqli_connect("localhost", "root", "", "clientes");
$a=mysqli_query($con, "select * from ciudad");?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mostrar datos ciudad</title>
</head>
<body>
    <table border="3">
    <tr>
<td>codigo ciudad</td>
<td>ciudad</td>
<td>eliminar</td>
    </tr>
<?php
while($s=mysqli_fetch_array($a)) {
?>
    <tr>
    <td><?php echo $s['idciudad'];?></td>
    <td><?php echo $s['ciudad']; ?></td>
    <td><a href="elimc.php?e=<?php echo $s['idciudad']; ?>">eliminar</a></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
