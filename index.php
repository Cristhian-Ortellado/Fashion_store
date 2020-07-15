<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Luciernaga Boutique</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
 


</head>
<!-- hacemos una consulta -->
<?php
        try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT * FROM productos";
            $resultado = $conn->query($sql);
            //guardamos el numero de filas
            $rows = $resultado->num_rows ;
            
        } catch (Exception $th) {
            echo $th->getMessage();
        }
        ?>
    <body class="home">
    
        <header>
          
            <!-- incluimos el archivo header.php -->
            <?php include_once 'includes/templates/header.php'; ?>
        </header>
        <div class="titulo">
            <h1>Luce tu propio estilo</h1>
        </div>
        <div class="contenedor contenedor-venta ">
            <div class="oferta-venta ">
                <img src="img/vendido.jpeg" alt="">
                <p>Novedades</p>
            </div>
            <div class="oferta-venta ">
                <img src="img/bolsas.jpg" alt="">
                <p>Ofertas</p>
            </div>
            <div class="oferta-venta ">
                <img src="img/model (2).jpg" alt="">
                <p>Consultas</p>
            </div>
        </div>
        <!-- .contenedor-venta -->

        <div class="contenedor ">
            <div class="subtitulo">
                <h2>MUJERES</h2>
            </div>
            <section class="card-productos contenido mujeres">

                <?php for ($i=0; $i <4 && $rows>=4; $i++) { 
                    $productos= $resultado->fetch_assoc();
                    while($productos['sexo']!='1'){
                        $productos= $resultado->fetch_assoc();
                    }
                    ?>
                <div class="card">
                    <div class="img-producto">
                        <img src='<?php echo $productos['url_img'];?>' alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">
                            <?php echo $productos['nombre']; ?>
                        </p>
                        <p>
                            <?php echo $productos['precio']; ?><i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
                <?php } ?>
            </section>
            <div class="subtitulo">
                <h2>HOMBRES</h2>
            </div>
            <section class="contenido card-productos hombres">
                <?php
                    //volvemos a la primera fila de la consulta
                    $resultado->data_seek(0);
                    //determinamos el numero de card por el tama;o de la pantalla
                    $pantalla = intval($_COOKIE['var']);
                    $cantidadRopa = 3;
                    if ($pantalla<700) {
                        $cantidadRopa = 2;
                    }
                    
            ?>

                    <?php for ($i=0; $i <$cantidadRopa; $i++) { 
                    $productos= $resultado->fetch_assoc();
                    while($productos['sexo']!='2' ){
                        $productos= $resultado->fetch_assoc();
                    }       
                    ?>
                    <div class="card">
                        <div class="img-producto">
                            <img src='<?php echo $productos['url_img'];?>' alt="ropa">
                        </div>
                        <div class="card-opciones">
                            <p class="nombre-producto">
                                <?php echo $productos['nombre']; ?>
                            </p>
                            <p>
                                <?php echo $productos['precio']; ?><i class="fa fa-dollar" aria-hidden="true"></i></p>
                            <a href="#">Detalles</a>
                        </div>
                    </div>
                    <?php } ?>
            </section>
            <!-- contenido card-productos -->
        </div>
        <!-- contenedor -->
        <!-- incluimos el footer.php -->
        <?php include_once 'includes/templates/footer.php' ; ?>
        <?php $conn->close();?>
        <script src="js/vendor/modernizr-3.8.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
        </script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('set', 'transport', 'beacon');
            ga('send', 'pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async></script>
    </body>

</html>