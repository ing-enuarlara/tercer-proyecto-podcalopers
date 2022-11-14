<?php
include("includes/head.php");
?>

</head>
<body>
    <?php
    include("includes/header.php");
    ?>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.php">Productos</a>
        <?php
        include("includes/navegacion-categorias.php");
        ?>
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

    <?php
    include("includes/footer.php");
    ?>
</body>

</html>