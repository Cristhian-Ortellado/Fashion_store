<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css?v=<?php echo(rand()); ?>">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    
</head>



<body class="contactos">
    <header>
    <?php include_once 'includes/templates/header.php'; ?>
    </header>
    <main class="contenedor">
        <h1 class="fuente-titulo izquierda">Comunicate con nosotros</h1>
        <div class="contenedor-contacto">
            <div class="texto-contactos">
                    <p class="textito izquierda">
                        !En luciernaga boutique podes realizar tus pedidos y consultas desde tu celular!
    
                    </p>
                <div class="seguinos">
                    <p class="textito izquierda texto-abajo">
                        Para enterarte de las novedades y ofertas seguinos en nuestras redes sociales
                    </p>
                      
                </div>
            </div> <!-- texto-contactos-->
            <div class="redes">
                <div class="red">
                    
                    <a href="#" class="icono"><i class="fab fa-whatsapp fa-4x"></i> </a>
                    <p class="texto-red">Envianos y Consulta 
                    tus pedidos aqui</p>
    
                </div>
                <div class="red">
                    
                    <a href="#" class="icono"><i class="fab fa-instagram fa-4x"></i></a>
                    <p class="texto-red">Envianos y Consulta 
                        tus pedidos aqui</p>
    
                </div>
                <div class="red">
                    <p class="icono"><i class="fas fa-phone fa-4x"></i></p>
                    <!-- <a href="#"></a> -->
                    <p class="texto-red">Llamanos al
                        00000-112</p>
                </div>
            </div> <!-- redes pa-->
        </div> <!-- contenedor-contactos pa-->
      
    </main>


 <!-- incluimos el footer -->
 <?php include_once 'includes/templates/footer.php' ; ?>
    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
        </script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
</body>
    

</html>