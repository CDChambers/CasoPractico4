<?php
require_once 'conexion.php';
require_once 'lib/nusoap.php';


function Obtenerdulces(){ 
    try {
    
            $conexion= new Conexion();
            
            $consulta=$conexion->prepare("SELECT * FROM dulces");
            $consulta->execute();
            $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
            $resultado = json_encode($datos);
            return $resultado;
    }
    catch (Exception $ex) {
        return json_encode(false);
    }
}


//$a=obtenerdulces();


function Insertardulce($imagen,$nombre,$descripcion,$origen) { try {
        $conexion=new Conexion();
        $consulta=$conexion->prepare("INSERT INTO dulces( Imagen, Nombre,Descripcion,Origen) 
        VALUES(:imagen,:nombre,:descripcion,:origen)");
        $consulta->bindParam(":imagen",$imagen, PDO::PARAM_STR);
        $consulta->bindParam(":nombre",$nombre, PDO::PARAM_STR);
        $consulta->bindParam(":descripcion",$descripcion, PDO::PARAM_STR);
        $consulta->bindParam(":origen",$origen, PDO::PARAM_STR);
        $consulta->execute();
        $ultimoID=$conexion->lastInsertId() ;
        return join(",",array($ultimoID));
    } catch (Exception $e) {
        return join(",",array(false));
    } 
 } 

 function Actualizardulce($id,$imagen,$nombre,$descripcion,$origen) { try {
    $conectar=new Conexion();
    $consulta=$conectar->prepare("UPDATE dulces SET Nombre=:nombre,Imagen=:imagen,Descripcion=:descripcion ,origen=:origen WHERE Id=:id");
    $consulta->bindParam(":id",$id, PDO::PARAM_INT);
    $consulta->bindParam(":imagen",$imagen, PDO::PARAM_STR);
    $consulta->bindParam(":nombre",$nombre, PDO::PARAM_STR);
    $consulta->bindParam(":descripcion",$descripcion, PDO::PARAM_STR);
    $consulta->bindParam(":origen",$origen, PDO::PARAM_STR);
    $consulta->execute();
    return 1;
} catch (Exception $e) {
    return 0;
} 
} 

function Eliminardulce($id) { try {
    $conectar=new Conexion();
    $consulta=$conectar->prepare("DELETE FROM dulces WHERE Id=:id");
    $consulta->bindParam(":id",$id,PDO::PARAM_INT);
    $consulta->execute();
    return 1;
} catch (Exception $e) {
    return 0;
} 
} 

 //Definicion del servicio
 $server=new nusoap_server();
 $server->configureWSDL("dulcesservice","urn:dulcesservice");
 $server->register("Obtenerdulces",
    array(),
    array("return"=>"xsd:string"),
    "urn:dulcesservice",
    "urn:dulcesservice#Obtenerdulces",
    "rpc" ,
    "encode",
    "Metodo para consultar dulces"
);

$server->register("Insertardulce",
array("Imagen"=>"xsd:string","Nombre"=>"xsd:string", "Descripcion"=>"xsd:string", "Origen"=>"xsd:string"),
array("return"=>"xsd:string"),
"urn:dulcesservice",
"urn:dulcesservice#Insertardulce",
"rpc" ,
"encode",
"Método para insertar dulces"
);

$server->register("Actualizardulce",
array("Id"=>"xsd:int","Imagen"=>"xsd:string","Nombre"=>"xsd:string", "Descripcion"=>"xsd:string", "Origen"=>"xsd:string"),
array("return"=>"xsd:string"),
"urn:dulcesservice",
"urn:dulcesservice#Actualizardulce",
"rpc" ,
"encode",
"Método para actualizar dulces"
);

$server->register("Eliminardulce",
array("Id"=>"xsd:int"),
array("return"=>"xsd:string"),
"urn:dulcesservice",
"urn:dulcesservice#Eliminardulce",
"rpc" ,
"encode",
"Método para Eliminar dulces"
);




$post= file_get_contents('php://input');
$server->service($post);

?>



