<?php
$c=mysqli_connect("localhost", "root", "", "clientes");
$consul=mysqli_query($c, "select * from ciudad");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
body {
 background-color: #C04143;
}
</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="guardarclientes.php" enctype="multipart/form-data">
 <p><strong style="font-size: 18px">INGRESAR DATOS DEL CLIENTE</strong></p>
<p>
<label for="textfield">documento:</label>
<input type="text" name="textfield" id="textfield">
</p>
<p>
<label for="textfield2">nombres:</label>
<input type="text" name="textfield2" id="textfield2">
</p>
<p>
<label for="textfield3">apellidos:</label>
<input type="text" name="textfield3" id="textfield3">
</p>
<p>
<label for="textfield4">telefono:</label>
<input type="text" name="textfield4" id="textfield4">
</p>
<p>
<label for="textfield5">dirección: </label>
<input type="text" name="textfield5" id="textfield5">
</p>
<p>
<label for="ciu">Ciudad: </label>
<select name="ciu" id="ciu">
<?php
while($s=mysqli_fetch_array($consul)) {
?>
<option value="<?php echo $s['idciudad']; ?> "><?php echo $s['ciudad']; ?></option>
<?php } ?>

</select>
</p>
<label for="ciu">Subir foto</label><input type="file" name="foto">
<p>
<input type="submit" name="submit" id="submit" value="Enviar">
</p>
</form>
</body>
</html>