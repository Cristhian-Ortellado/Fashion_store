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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
</head>
    <header>
        <!-- incluimos el archivo header.php -->
        <?php include_once 'includes/templates/header.php'; ?>
    </header>
    <body class="home">
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
        </div><!-- .contenedor-venta -->
        
        <div class="contenedor ">
            <div class="subtitulo">
                <h2>MUJERES</h2>
            </div>
            <section class="card-productos contenido mujeres">
                <div class="card">
                    <div class="img-producto">
                        <img src="img/productos/ropa (1).jpeg" alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">Gorro, jeans y tricota</p>
                        <p>225 <i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-producto">
                        <img src="img/productos/ropa (2).jpeg" alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">Short, remera y camisa</p>
                        <p>300 <i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-producto">
                        <img src="img/productos/ropa (4).jpeg" alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">Short, remera y camisa</p>
                        <p>150 <i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-producto">
                        <img src="img/productos/ropa (3).jpeg" alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">Short, remera y camisa</p>
                        <p>300 <i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
            </section>
            <div class="subtitulo">
                <h2>HOMBRES</h2>
            </div>
            <section class="contenido card-productos hombres">
                <div class="card">
                    <div class="img-producto">
                        <img src="img/productos/hombre2.jpg" alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">Campera Nike</p>
                        <p>225 <i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-producto">
                        <img src="img/productos/hombre3.jpg" alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">Camisa elegante</p>
                        <p>225 <i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-producto">
                        <img src="img/productos/hombre4.jpg" alt="ropa">
                    </div>
                    <div class="card-opciones">
                        <p class="nombre-producto">Sudadera</p>
                        <p>225 <i class="fa fa-dollar" aria-hidden="true"></i></p>
                        <a href="#">Detalles</a>
                    </div>
                </div>
            </section>
            <!-- contenido card-productos -->
        </div>
        <!-- contenedor -->
        <!-- incluimos el footer.php -->
        <?php include_once 'includes/templates/footer.php' ; ?>
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