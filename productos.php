<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/main.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="css/productos.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
</head>

<?php
    
        try {
            include_once 'includes/funciones/funciones.php';
            require_once('includes/funciones/bd_conexion.php');
            if (isset($_POST) && count($_POST) != 0) {
                //comprobamos el sexo, tipo y estado(ofertas etc)
                $tipo = $_POST['tipo'];
                $sql = "SELECT id, nombre, precio, url_img, cantidad, tamano, descuento, nombre_tipo, novedad FROM `productos` INNER JOIN tipos ON productos.clasificacion = tipos.id_tipos ";
                $sql .= " WHERE nombre_tipo = '$tipo' " ;
                switch ($_POST['estado']) {
                    case 'Ofertas':
                        $sql .=" AND  descuento>0 ;";
                        break;
                    case 'Novedades':
                        $sql .=" AND  novedad = 1 ;";
                        break;
                    default:
                    break;
                }
                
            }else  if (isset($_GET) ){
                if ($_GET['estado']=='Ofertas') {
                $sql = "SELECT id, nombre, precio, url_img, cantidad, tamano, descuento, novedad, nombre_tipo FROM productos INNER JOIN tipos ON productos.clasificacion = tipos.id_tipos WHERE nombre_tipo= 'Blusas' AND descuento>0 ; ";
                }else{
                    $sql = "SELECT id, nombre, precio, url_img, cantidad, tamano, descuento, novedad, nombre_tipo FROM productos INNER JOIN tipos ON productos.clasificacion = tipos.id_tipos WHERE nombre_tipo= 'Blusas' AND novedad=1 ; ";
                }
            }else {
                $sql = "SELECT id, nombre, precio, url_img, cantidad, tamano, descuento, novedad, nombre_tipo FROM productos INNER JOIN tipos ON productos.clasificacion = tipos.id_tipos WHERE nombre_tipo= 'Blusas'  ; ";
            }
            $resultadoProducto = $conn->query($sql);
            //guardamos el numero de filas
            $rowsProducto = $resultadoProducto->num_rows;
           //vemos desde que dispositivo esta corriendo la pagina web
       
           $pixeles = (($_COOKIE['var']) <992 && ($_COOKIE['var'])>700 ) ? 3 : 4 ;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
        ?>
     
<body class="productos">
    <header>
           <!-- incluimos el archivo header.php -->
           <?php include_once 'includes/templates/header.php'; ?>
    </header>
    <div class="contenido">
        <section class="filtro-mobile">
            <!-- <p>Ordenar por:</p> -->
            <form name="form_filtro" id="form-filtro" action="productos.php" method="post" >
                <select name="tipo" class="filtro-select" >
                    <option  <?php echo optionSelected('Blusas', 'tipo'); ?> >Blusas</option>
                    <option <?php echo optionSelected('Jeans', 'tipo'); ?> >Jeans</option>
                    <option  <?php echo optionSelected('Camperas', 'tipo'); ?> >Camperas</option>
                    <option  <?php echo optionSelected('Conjuntos', 'tipo'); ?> >Conjuntos</option>
                    <option  <?php echo optionSelected('Sudaderas', 'tipo'); ?> >Sudaderas</option>
                    <option  <?php echo optionSelected('Camisas', 'tipo'); ?> >Camisas</option>
                    <option  <?php echo optionSelected('Calzados', 'tipo'); ?> >Calzados</option>
                </select>
                <select name="estado" class="filtro-select" >
                    <option <?php echo optionSelected('Todos', 'estado'); ?>>Todos</option>
                    <option <?php echo optionSelected('Novedades', 'estado'); ?>>Novedades</option>
                    <option <?php echo optionSelected('Ofertas', 'estado'); ?>>Ofertas</option>
                </select>
                <input type="submit" value="Filtrar">
            </form>

        </section><!--filtro-mobile-->
       
        <section class="productos">
        <!-- <section class="card-productos contenido mujeres"> -->
                <?php for ($i=0; $i <$rowsProducto ; $i++) { 
                    //asociamos el array
                    $productos= $resultadoProducto->fetch_assoc(); ?>
                    <!-- creamos las tarjetas -->
                    <?php 
                        //cada 4 cartas crearemos un section
                        if (($i)%($pixeles)==0) 
                            echo '<section class="card-productos contenido mujeres">';
                    ?>
                    <div class="card" id="card-<?php echo $productos['id'];?>">
                            <?php
                                //si hay descuento generamos un texto que indique que porcentaje es la rebaja
                                if ($productos['descuento'] != '0') {
                                    echo '<p class="porcentaje">' .$productos['descuento'] .'%</p>';
                                }
                            ?>  
                        <div class="img-producto">
                            <img src='<?php echo $productos['url_img'];?>' alt="ropa">
                        </div><!-- img-producto -->
                        <div class="card-opciones">
                            <p class="nombre-producto">
                                <?php echo $productos['nombre']; ?>
                            </p>
                            <p>
                                <?php echo $productos['precio']; ?><i class="fa fa-dollar" aria-hidden="true"></i></p>
                            <a href="#modal-<?php echo $productos['id'];?>">Detalles</a>
                        </div><!-- card-opciones -->

                    </div><!-- card -->
                    <div class="container-all" id="modal-<?php echo $productos['id']; ?>">
                            <div class="popup">
                                <div class="img-popup">
                                <img src='<?php echo $productos['url_img'];?>' alt="ropa">
                                    <p class="redes">Seguinos </p>
                                    <div class="redes">
                                        <i class="fa fa-whatsapp"><a href=""></a></i>
                                        <i class="fa fa-instagram"><a href=""></a></i>
                                    </div>
                                </div>
                                <div class="container-text">
                                    <h1><?php echo $productos['nombre'] ;?></h1>
                                    <?php
                                        //verificamos si posee algun descuento
                                        if ($productos['descuento'] != '0'){ 
                                            $descuento = intval(($productos['precio'])*($productos['descuento']/100));            ?>
                                            <div class="contenedor-precio">
                                                <p class="precio tachado"><?php echo $productos['precio'] ;?><span> Gs</span></p>  <p class="precio descuento"><?php echo intval($productos['precio'] - $descuento) ;?><span> Gs</span></p>
                                            </div>
                                <?php }else{  ?>
                                                <p class="precio "><?php echo $productos['precio'] ;?><span> Gs</span></p>
                                    <?php    }  ?>
                                    <div class="ropa-detalles">
                                        <p class="color">Colores : 
                                            <?php 
                                            //imprimimos los colores
                                            //abrimos una consulta a la tabla colores
                                            $sql = "SELECT id_color FROM color_producto WHERE id_producto = ". $productos['id'].";";
                                            $resultadoColor = $conn->query($sql);
                                            $rowsColor = $resultadoColor->num_rows;
                                            //recorremos la tabla colores para hallar cada valor hexadecimal por cada id producto existente en la tabla color_producto
                                            for ($j=0; $j <$rowsColor ; $j++) {    
                                                try {
                                                    //encontramos el id_color por cada producto
                                                    $productoColor = $resultadoColor->fetch_assoc();
                                                    //hacemos la consulta
                                                    $sql = "SELECT valor FROM colores WHERE id = ". $productoColor['id_color'].";";
                                                    $respuestaColores = $conn->query($sql);
                                                    $color=$respuestaColores->fetch_assoc();
                                                } catch (Exception $th) {
                                                    echo $th->getMessage();
                                                }?>
                                                <span style="background:<?php echo $color['valor'] ?>"></span>
                                            <?php } ?>
                                        </p>
                                        <p>Tamaños : <span><?php echo $productos['tamano']; ?></span></p>
                                        <p>Disponibilidad :<span>
                                            <?php if($productos['cantidad']>0)
                                                echo "En Stock";
                                            else
                                                echo "Acabado";
                                            ?>
                                        </span></p>
                                    </div><!--ropa-detalles-->
                                    <p>Pedidos Aqui</p>
                                    <div class="pedidos">
                                        <a><i class="fa fa-whatsapp"></i></a>
                                        <a href=""><i class="fa fa-instagram"></i></a>
                                        <a href="whatsapp://send?text=Mira%20esta%20prenda%20en%20oferta%20<?php echo url_actual(); ?>" data-action="share/whatsapp/share"><input type="button" value="Compartir"></a>
                                    </div><!--pedidos-->
                                </div><!--container-text-->
                                <a href="#card-<?php echo $productos['id'];?>" class="btn-popup-close">
                                    <img src="img/close.png" alt="">
                                </a>
                            </div><!--popup-->
                        </div><!-- container-all -->
                    <?php if (($i+1)%($pixeles)==0) {
                        echo "</section>";
                    } ?>
                <?php } ?>
        </section><!--productos-->
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