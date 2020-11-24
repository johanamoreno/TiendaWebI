<?php

 include("BaseDatos.php");

 //0. Recibir el id del registro a eliminar
  $id=$_GET["id"];

  //1.Utilizar la base de datos (instanciar=sacarle copia a la clase)
 $transaccion= new BaseDatos();

 //2. crear la consulta SQL para eliminar registros
 $consultaSQL="DELETE FROM productos WHERE IdProducto='$id'";

 //3. Llamar y utilizar el metodo eliminarDatos
 $transaccion->eliminarDatos($consultaSQL);

 header("location:listarProducto.php");




?>