<?php


$path = "img/". basename($_FILES['imagen']['name']); 
move_uploaded_file($_FILES['imagen']['tmp_name'], $path);
$imagen=basename( $_FILES['imagen']['name']);

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$origen=$_POST['origen'];


require_once("lib/nusoap.php");
$url=new nusoap_client("http://localhost/CasoPractico04/SWDulces/Dulces_sw.php");
$insertar=$url->call( 'Insertardulce',array('imagen'=>$imagen,'nombre'=>$nombre,'descripcion'=>$descripcion,'oigen'=>$origen));

print $insertar;
header("Location: index.php");
?>

