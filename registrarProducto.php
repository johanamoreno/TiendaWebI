<?php

include("BaseDatos.php");

if (isset($_POST["botonEnvio"])){

    //1.Recibir datos:
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];

    //2.Crear un objeto (sacar una copia) de la clase BaseDatos

    $transaccion= new BaseDatos();

    //3. Crear consulta SQL para agregar datos
    $consultaSQL="INSERT INTO productos (nombre,marca,precio,descripcion,foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";

    //4. Llamar al metodo agregarDato
    $transaccion->agregarDatos($consultaSQL);

    header("location:formularioProducto.php");
    

    
}



?>