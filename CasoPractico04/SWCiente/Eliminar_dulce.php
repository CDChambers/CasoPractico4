<?php
$id=$_POST['id_eliminar'];
echo $id;
require_once("lib/nusoap.php");
$url=new nusoap_client("http://localhost/CasoPractico04/SWDulces/Dulces_sw.php");
$Eliminar=$url->call( 'Eliminardulce',array('id'=>$id));

header("Location: index.php");
?>

