<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'clientes'
) or die(mysqli_erro($mysqli));

if (isset($conn)) {
echo
 'conectado';
}

?>