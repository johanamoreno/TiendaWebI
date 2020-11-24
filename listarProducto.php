<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Perfumes</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="Index.php">TIENDA WEB I</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="formularioProducto.php">Registro<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listarProducto.php">Productos</a>
                    </li>
                </ul>
                
            </div>
        </nav>

    </header>
     <br>
    <div align="center">
          <img src="img/logo.png">
        </div> 
        <br>

<?php
//Hacer una consulta en BD para traer todos los usuarios

//1. Incluir el archivo donde esta nuestra clase BaseDatos
include("BaseDatos.php");

//2. Crear la consulta SQL para buscar datos
$consultaSQL="SELECT * FROM productos WHERE IdProducto";

//3.Crear un objeto de la clase BaseDato y usar el metodo buscarDatos

$transaccion=new BaseDatos();
$productos=$transaccion->buscarDatos($consultaSQL);


?>

<div class="container">
   <div class="row row-cols-1 row-cols-md-3">
     <?php foreach($productos as $producto):?>
        <div class="col mb-4">
           <div class="card h-100">
              <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="..." style= "width:100px">
              <div class="card-body">
                 <h4 class="card-title text-center"><?php echo($producto["nombre"])?></h4>
                 <h5 class="card-text text-center"><?php echo($producto["marca"])?></h5>
                 <h5 class="card-text text-center"><?php echo($producto["precio"])?></h5>
                  <p class="card-text"><?php echo($producto["descripcion"])?></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["IdProducto"])?>">
                      Editar Producto
                  </button>
                  <a href ="eliminarProducto.php?id=<?php echo($producto["IdProducto"])?>" class="btn btn-primary">Eliminar Producto</a>
                  </div>
           </div>

           <div class="modal fade" id="editar<?php echo($producto["IdProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form action="editarProducto.php?id=<?php echo($producto["IdProducto"])?>" method="POST">
                                       <div class="form-group">
                                          <label>Foto</label>
                                          <textarea class="form-control" name="fotoEditar"><?php echo($producto["foto"])?></textarea>
                                       </div> 
                                       <div class="form-group">
                                          <label>Nombre</label>
                                          <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">
                                       </div>
                                       <div class="form-group">
                                          <label>Marca</label>
                                          <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>">
                                       </div>
                                       <div class="form-group">
                                          <label>Precio</label>
                                          <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                                       </div>
                                       <div class="form-group">
                                          <label>Descripcion</label>
                                          <textarea class="form-control" name="descripcionEditar"><?php echo($producto["descripcion"])?></textarea>
                                       </div>
                                    <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                 </form>
                              </div>
                  </div>
               </div>
            </div>
         </div>

      <?php endforeach?>
   </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>