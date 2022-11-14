<?php
include("conexion.php");
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
            <img class="header__logo" src="../../admin/files/logo/<?=$configuracion['conf_logo'];?>" alt="Logotipo">
        </a>

    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.php">Tienda</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.php">Nosotros</a>

    </nav>

    <main class="contenedor">
        <h1>Sobre Nosotros</h1>

        <div class="nosotros">
            <div class="nosotros__contenido">
                <p>Cras fringilla, arcu ac ultrices consequat, justo purus tempor justo, ut tempus diam orci vitae eros.
                    Nunc imperdiet metus sed turpis placerat, at cursus est consectetur. Cras tempus fermentum ligula sed
                    suscipit. Curabitur at malesuada nunc, non convallis libero. Ut viverra malesuada turpis sed malesuada.
                    Nam mattis purus vitae tortor scelerisque rutrum.</p>
                
                <p>Nulla nec dui ac mi accumsan blandit. Ut tincidunt mollis convallis. Vivamus dapibus nulla ac posuere
                    laoreet. Fusce tristique semper enim quis condimentum. Nulla interdum, dui vitae mollis ornare, enim urna
                    ultrices lectus, vitae sollicitudin ex orci fringilla tellus. Curabitur luctus arcu quis consequat congue.</p>

            </div>

            <img src="img/nosotros.jpg" alt="imagen nosotros" class="nosotros__imagen">

        </div>

    </main>

    <section class="contenedor comprar">
        <h2 class="comprar__titulo">¿Porqué Comprar con Nosotros?</h2>

        <div class="bloques">
            <div class="bloque">
                <img class="bloque__imagen" src="img/icono_1.png" alt="porque comprar">

                <h3 class="bloque__titulo">El Mejor Precio</h3>

                <p>Nulla nec dui ac mi accumsan blandit. Ut tincidunt mollis convallis. Vivamus dapibus nulla ac posuere
                    laoreet.</p>

            </div>

            <div class="bloque">
                <img class="bloque__imagen" src="img/icono_2.png" alt="porque comprar">

                <h3 class="bloque__titulo">Para Devs</h3>

                <p>Nulla nec dui ac mi accumsan blandit. Ut tincidunt mollis convallis. Vivamus dapibus nulla ac posuere
                    laoreet.</p>

            </div>

            <div class="bloque">
                <img class="bloque__imagen" src="img/icono_3.png" alt="porque comprar">

                <h3 class="bloque__titulo">Envío Gratis</h3>

                <p>Nulla nec dui ac mi accumsan blandit. Ut tincidunt mollis convallis. Vivamus dapibus nulla ac posuere
                    laoreet.</p>

            </div>

            <div class="bloque">
                <img class="bloque__imagen" src="img/icono_4.png" alt="porque comprar">

                <h3 class="bloque__titulo">La Mejor Calidad</h3>

                <p>Nulla nec dui ac mi accumsan blandit. Ut tincidunt mollis convallis. Vivamus dapibus nulla ac posuere
                    laoreet.</p>

            </div>

        </div>

    </section>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>

    </footer>

</body>

</html>