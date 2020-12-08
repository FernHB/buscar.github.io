<?php
$mysqli=new mysqli("sql10.freesqldatabase.com","sql10380866","uQUC1DCMt9","sql10380866");
if(mysqli_connect_errno()){
	echo "Conexion Fallida:",mysqli_connect_errno();
	exit();
}

$id=$_GET['t'];
$query="SELECT * FROM alumnos WHERE dni='$id'";
$resultado=$mysqli->query($query);

while($registro=mysqli_fetch_array($resultado)) {

echo $registro['nombre'].PHP_EOL;
echo $registro['apellido_paterno'].PHP_EOL;
echo $registro['apellido_materno'];

}
?>
