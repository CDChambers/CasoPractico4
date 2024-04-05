<?php
    class Conexion extends PDO{
        private $hostBD='localhost'; //Nombre del Servidor de base de datos
        private $nombreBD='dulces';
        private $usuarioBD='root';
        private $passwordBD='';
        //Constructor
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.
                ';charset=utf8',$this->usuarioBD,$this->passwordBD,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                

            } catch (Exception $e) {
                echo  'Falló la conexión: ' .$e->getMessage();
                exit;
            }

        }

    

    }

    /*
    Id int NOT NULL AUTO_INCREMENT,
    Imagen varchar(120),
    Nombre varchar(60),
    Descripcion varchar(200),
    Origen varchar(60),
    PRIMARY KEY (Id)
);
     */

?>
