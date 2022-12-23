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
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    </nav>

    <?php
        $productos= $conexionBdComercial->query("SELECT * FROM comercial_productos WHERE cprod_id='".$_GET['id']."'");
        $resultadoP = mysqli_fetch_array($productos, MYSQLI_BOTH);
    ?>
    <main class="contenedor">
        <h1><?=$resultadoP['cprod_nombre'];?></h1>
        <div class="camisa">
            <img src="../../admin/files/productos/<?=$resultadoP['cprod_foto'];?>" alt="imagen del producto" class="camisa__imagen">
            <div class="camisa__contenido">
                <p><?=$resultadoP['cprod_detalles'];?>.</p>
                <a href="https://api.whatsapp.com/send?phone=57<?=$configuracion['conf_telefono'];?>&text=hola, quiero adquirir el <?=$resultadoP['cprod_nombre'];?>." target="_blank">
                    <input class="producto__submit" type="submit" value="Comprar">
                </a>
            </div>
        </div>
    </main>

    <?php
    include("includes/footer.php");
    ?>
</body>

</html>