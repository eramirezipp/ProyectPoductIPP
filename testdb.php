<?php
$user = "root";
$psw = "";
$Namedb = "prueba2";
$db = new mysqli("localhost", $user, $psw, $Namedb) or die("Fallo conexion");

echo "todo ok ";
?>