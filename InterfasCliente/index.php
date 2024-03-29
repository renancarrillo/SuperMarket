<?php 
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos2";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Market</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="four columns logoF">
                <img src="img/logoSM4.png" id="logo">
                <p class="titulo2">SuperMarket</p>
            </div>
            <div class="two columns u-pull-right">
                <ul>
                    <li class="submenu">
                            
                            <img src="img/cart.png" id="img-carrito">
                            
                            <div id="carrito">
                                    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    </header>


    <div id="hero">
        <div class="container">
            <div class="row">
                    <div class="six columns">
                        <div class="contenido-hero">
                                <h2>Las mejores Frutas y Verduras</h2>
                                <p></p>
                                <form action="#" id="busqueda" method="post" class="formulario">
                                    <input class="u-full-width" type="text" placeholder="¿Que te gustaría Comprar?" id="buscador">
                                    <input type="submit" id="submit-buscador" class="submit-buscador">
                                </form>
                        </div>
                    </div>
            </div> 
        </div>
    </div>

    <div id="lista-productos" class="container">
        <h1 id="encabezado" class="encabezado">Nuestros Productos</h3>

        <div class="row">
            <?php while($producto=mysqli_fetch_assoc($query)):?>
            <div class="four columns">
                <div class="card">
                    <img src="img/<?php echo $producto['imagen']?>" class="imagen-curso u-full-width">
                    <div class="info-card">
                        <h4><?php echo $producto['nombre']?></h4>
                        <p><?php echo $producto['descripcion']?></p>
                        <p class="precio"><?php echo $producto['stock']?>  <span class="u-pull-right "><?php echo $producto['precio']?></span></p>
                        <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar Al Carrito</a>
                    </div>
                </div> <!--.card-->
            </div>
            <?php endwhile; ?>

        </div> <!--.row-->

    </div>  

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                    <div class="four columns">
                            <nav id="principal" class="menu">
                                <a class="enlace" href="#">Sobre Nosotros</a>
                                <a class="enlace" href="#">contacto</a>
                                <a class="enlace" href="#">Ubicacion</a>
                                <a class="enlace" href="#"></a>
                                <a class="enlace" href="#"></a>
                            </nav>
                    </div>
                    
            </div>
        </div>
    </footer>

    <script src="js/app.js"></script>

</body>
</html>

<?php
    //cerrar la conexion
    mysqli_close($con)
?>