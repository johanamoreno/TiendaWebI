<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <main>
        <br>
        <div class="container">
            <form action="registrarProducto.php" method="POST">
                <h3>REGISTRO DE PRODUCTOS</h3>
                <br>
                <div class="row">
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Marca" name="marca">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>
                </div>
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold text-light">Descripción:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label class="font-weight-bold text-light">FOTO:</label>
                        <input type="text" class="form-control" placeholder="Foto" name="foto">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col align-self-end">
                        
                            
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar Producto</button>
            </form>
        </div>
    
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html> 