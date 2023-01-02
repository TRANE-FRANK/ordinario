<?php
$Email = $_POST['FormCorreo'];
echo $Email . "\n";

$User = $_POST['FormUser'];
echo $User . "\n";

$Name = $_POST['FormNombre'];
echo $Name . "\n";

$Pass = $_POST['FormContraseña'];
echo $Pass . "\n";


$mysqli = new mysqli("localhost", "root", "user", "registro");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}
else
{

    echo $mysqli->host_info . "\n";

    echo "Conexion Exitosa";

    $mysqli->query("insert into usuarios(email, user, namen, password) values(". $Email", ". $User", ". $Name", ". $Pass");")
}
?>
