<?php

class BaseDatos{

//Variable==Atributos    
public $usuarioBD="root";
public $passwordBD="";

//Funcio esperical para sacar copias de la clase (El contructor)
public function __construct(){}


//Funciones==Metodos
public function conectarBD(){

    try{
        $infoBD="mysql:host=localhost;dbname=tiendaweb";
        $conexionBD= new PDO($infoBD,$this->usuarioBD, $this->passwordBD);
        return($conexionBD);

    }catch(PDOException $error){
     
        echo($error->getMessage());
    }
}

public function agregarDatos($consultaSQL){

    //1. Conectarme a la BD
    $conexionBD=$this->conectarBD();
    
    //2. Preparar la consulta
    $consultaAgregarDatos= $conexionBD->prepare($consultaSQL);

    //3.Ejecutar la consulta
    $resultado=$consultaAgregarDatos->execute();

    //4. verifique el resultado
    if($resultado){
        echo("Producto agregado con exito");
    }else{
        echo("Error agregando el producto");
    }

}

public function buscarDatos($consultaSQL){

//1. Conectarme a la BD
$conexionBD=$this->conectarBD();

//2. Preparar la consulta
$consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

//3. Indicar cual es el metodo para traer los datos
$consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

//4. Ejecutar la consulta
$consultaBuscarDatos->execute();

//5. Retornas los datos consultados
return($consultaBuscarDatos->fetchAll());

}

public function eliminarDatos($consultaSQL){
//1. Conectarme a la BD
$conexionBD=$this->conectarBD();
    
//2. Preparar la consulta
$consultaEliminarDatos= $conexionBD->prepare($consultaSQL);

//3.Ejecutar la consulta
$resultado=$consultaEliminarDatos->execute();

//4. verifique el resultado
if($resultado){
    echo("Producto eliminado con exito");
}else{
    echo("Error eliminando el producto");
}
}

public function editarDatos($consultaSQL){

    //1. Conectarme a la BD
    $conexionBD=$this->conectarBD();
    
    //2. Preparar la consulta
    $consultaEditarDatos= $conexionBD->prepare($consultaSQL);

    //3.Ejecutar la consulta
    $resultado=$consultaEditarDatos->execute();

    //4. verifique el resultado
    if($resultado){
        echo("Producto editado con exito");
    }else{
        echo("Error editando el producto");
    }

}
}


?>