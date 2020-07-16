<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontawesome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/popup.css">
</head>
<?php
        try {
            
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT id, nombre, precio, url_img, cantidad, tamano, descuento, novedad, sexo FROM ";
            $sql .="productos ;";
            $resultadoProductos = $conn->query($sql);
            $producto = $resultadoProductos->fetch_assoc();
            $rowsProducto = $resultadoProducto->num_rows;
            
            //abrimos una consulta a la tabla colores
            $sql = "SELECT id_color FROM color_producto WHERE id_producto = ". $producto['id'];
            $resultadoColor = $conn->query($sql);
            $rowsColor = $resultadoColor->num_rows;
            //guardamos el numero de filas
            
        } catch (Exception $th) {
            echo $th->getMessage();
        }
?>
    <pre>
        <?php echo var_dump($resultadoColor) ."este es";  ?>
    </pre>
    <body>
        <?php include_once 'includes/funciones/funciones.php'; ?>
        <a href="#modal-<?php echo $producto['id'];?>">PRESIONE AQUI</a>
        <div class="container-all" id="modal-<?php echo $producto['id']; ?>">
            <div class="popup">
                <div class="img-popup">
                <img src='<?php echo $producto['url_img'];?>' alt="ropa">
                    <p class="redes">Seguinos </p>
                    <div class="redes">
                        <i class="fa fa-whatsapp"><a href=""></a></i>
                        <i class="fa fa-instagram"><a href=""></a></i>
                    </div>
                </div>
                <div class="container-text">
                    <h1><?php echo $producto['nombre'] ;?></h1>
                    <p class="precio"><?php echo $producto['precio'] ;?><span> Gs</span></p>
                    <div class="ropa-detalles">
                        <p class="color">Colores : 
                            <?php 
                            //imprimimos los colores
                            for ($i=0; $i <$rowsColor ; $i++) {    
                                try {
                                    //encontramos el id_color por cada producto
                                    $productoColor = $resultadoColor->fetch_assoc();
                                    //hacemos la consulta
                                    $sql = "SELECT valor FROM colores WHERE id = ". $productoColor['id_color'];
                                    $respuestaColores = $conn->query($sql);
                                    $color=$respuestaColores->fetch_assoc();
                                } catch (Exception $th) {
                                    echo $th->getMessage();
                                }?>
                                <span style="background:<?php echo $color['valor'] ?>"></span>
                            <?php } ?>
                        </p>
                        <p>Tamaños : <span><?php echo $producto['tamano']; ?></span></p>
                        <p>Disponibilidad :<span>
                            <?php if($producto['cantidad']>0)
                                echo "En Stock";
                            else
                                echo "Acabado";
                            ?>
                        </span></p>
                    </div>
                    <p>Pedidos Aqui</p>

                    <div class="pedidos">
                        <a><i class="fa fa-whatsapp"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href="whatsapp://send?text=Mira%20esta%20prenda%20en%20oferta%20<?php echo url_actual(); ?>" data-action="share/whatsapp/share"><input type="button" value="Compartir"></a>
                    </div>
                </div>
                <a href="#" class="btn-popup-close">
                    <img src="img/close.png" alt="">
                </a>
            </div>
        </div>

        <?php $conn->close();?>
    </body>

</html>