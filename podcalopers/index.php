<?php
include("includes/head.php");
?>

</head>
<body>
    <?php
    include("includes/header.php");
    ?>

    <nav class="navegacion">
        <a class="navegacion__enlace <?php if(!isset($_GET['cat'])){echo 'navegacion__enlace--activo';}?>" href="index.php">Productos</a>
        <?php
        include("includes/navegacion-categorias.php");
        ?>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Nuestros Productos</h1>
        <?php
        $consulta="SELECT * FROM comercial_productos WHERE cprod_id_empresa=2";
        if(isset($_GET['cat'])){
            $consulta="SELECT * FROM comercial_productos 
            INNER JOIN comercial_marcas ON cmar_id=cprod_marca 
            INNER JOIN comercial_categorias ON ccat_id=cmar_categoria 
            WHERE cprod_id_empresa=2 AND ccat_id='".$_GET['cat']."'";
        }
        ?>
        <div class="grid">
            <?php
            $productos= $conexionBdComercial->query($consulta);
            while($result = mysqli_fetch_array($productos, MYSQLI_BOTH)){
            ?>
            <div class="producto">
                <a href="producto.php?id=<?=$result['cprod_id'];?>">
                    <img class="producto__imagen" src="../../admin/files/productos/<?=$result['cprod_foto'];?>" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre"><?=$result['cprod_nombre'];?></p>
                        <p class="producto__precio">$<?=number_format($result['cprod_costo'],0,",",".");?></p>
                        <a href="https://api.whatsapp.com/send?phone=57<?=$configuracion['conf_telefono'];?>&text=hola, quiero adquirir el <?=$result['cprod_nombre'];?>." target="_blank">
                            <input class="producto__submit" type="submit" value="Comprar">
                        </a>

                    </div>
                </a>
            </div><!--producto-->
            <?php }?>
            <div class="grafico grafico--camisas"></div>
            <div class="grafico grafico--node"></div>
        </div>
    </main>

    <?php
    include("includes/footer.php");
    ?>
</body>

</html>