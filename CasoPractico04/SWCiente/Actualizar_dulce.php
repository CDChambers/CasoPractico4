<?php
$path = "img/". basename($_FILES['imagen_e']['name']); 
move_uploaded_file($_FILES['imagen_e']['tmp_name'], $path);
$imagen=basename( $_FILES['imagen_e']['name']);
$id=$_POST['id_e'];
$img=$_POST['img_e'];
$nombre=$_POST['nombre_e'];
$descripcion=$_POST['descripcion_e'];
$origen=$_POST['origen_e'];


require_once("lib/nusoap.php");
$url=new nusoap_client("http://localhost/CasoPractico04/SWDulces/Dulces_sw.php");
if($imagen==$img || $imagen==null)
{
    $actualizar=$url->call( 'Actualizardulce',array('id'=>$id,'imagen'=>$img,'nombre'=>$nombre,'descripcion'=>$descripcion,'oigen'=>$origen));
}
else{
    $actualizar=$url->call( 'Actualizardulce',array('id'=>$id,'imagen'=>$imagen,'nombre'=>$nombre,'descripcion'=>$descripcion,'oigen'=>$origen));

}
header("Location: index.php");
?>

