<?php
include("conexion.php");
$productos= $conexionBdComercial->query("SELECT * FROM comercial_productos WHERE cprod_id='".$_GET['id']."'");
$resultadoP = mysqli_fetch_array($productos, MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::FrontEnd Store::</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/logo.png" alt="Logotipo">

        </a>

    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.php">Tienda</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="#">Productos</a>
    </nav>

    <main class="contenedor">
        <h1><?=$resultadoP['cprod_nombre'];?></h1>

        <div class="camisa">
            <img src="../../admin/files/productos/<?=$resultadoP['cprod_foto'];?>" alt="imagen del producto" class="camisa__imagen">

            <div class="camisa__contenido">
                <p><?=$resultadoP['cprod_detalles'];?>.</p>
                <a href="https://api.whatsapp.com/send?phone=573156650193&text=hola, quiero adquirir el <?=$resultadoP['cprod_nombre'];?>." target="_target">
                    <input class="producto__submit" value="Comprar">
                </a>
            </div>

        </div>

    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>

    </footer>

</body>

</html>