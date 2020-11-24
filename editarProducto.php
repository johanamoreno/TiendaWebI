<?php

include("BaseDatos.php");

if (isset($_POST["botonEditar"])){

    //1.Recibir datos:
    $nombre=$_POST["nombreEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion=$_POST["descripcionEditar"];
    $foto=$_POST["fotoEditar"];

    //2.Recibir el Id del registro a actualizar
    $id=$_GET["id"];
    
    //3.Sacar copia de la BaseDatos
    $transaccion= new BaseDatos();

    //4. Crear consulta SQL para agregar datos
    $consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion',foto='$foto' WHERE IdProducto='$id'";

    //5. Llamar al metodo agregarDato
    $transaccion->editarDatos($consultaSQL);

    //6. Redireccion
    header("location:listarProducto.php");
    

    
}



?>