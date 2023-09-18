<?php 
class conexionDatabase{
    public static function conectar(){
        $conexion = new PDO('mysql:host=localhost;dbname=mvc', 'root', ''); 
        return $conexion; 
    }
}
