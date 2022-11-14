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
            <img class="header__logo" src="img/logo.png" alt="Logotipo">

        </a>

    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace <?php if(!isset($_GET['cat'])){echo 'navegacion__enlace--activo';}?>" href="index.php">Tienda</a>
        <?php
        $activo='';
        $cat='';
        if(isset($_GET['cat'])){
            $cat=$_GET['cat'];
            $activo='navegacion__enlace--activo';
        }
        $categorias= $conexionBdComercial->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=1");
        while($result = mysqli_fetch_array($categorias, MYSQLI_BOTH)){
        ?>
        <a class="navegacion__enlace <?php if($result['ccat_id']==$cat){echo $activo;}?>" href="index.php?cat=<?=$result['ccat_id'];?>"><?=$result['ccat_nombre'];?></a>
        <?php }?>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    </nav>

    <main class="contenedor">
        <h1>Nuestros Productos</h1>
        <?php
        $consulta="SELECT * FROM comercial_productos WHERE cprod_id_empresa=1";
        if(isset($_GET['cat'])){
            $consulta="SELECT * FROM comercial_productos 
            INNER JOIN comercial_marcas ON cmar_id=cprod_marca 
            INNER JOIN comercial_categorias ON ccat_id=cmar_categoria 
            WHERE cprod_id_empresa=1 AND ccat_id='".$_GET['cat']."'";
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
                        <a href="https://api.whatsapp.com/send?phone=573156650193&text=hola, quiero adquirir el <?=$result['cprod_nombre'];?>." target="_target">
                            <input class="producto__submit" value="Comprar">
                        </a>

                    </div>
                </a>
            </div><!--producto-->
            <?php }?>

            <div class="producto">
                <a href="producto.php">
                    <img class="producto__imagen" src="img/3.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">ReactJS</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/4.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">Redux</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/5.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">Nodes.js</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/6.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">SASS</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/7.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">HTML5</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/8.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">Github</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/9.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">BulmaCSS</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/10.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">TypeSccrip</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/11.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">Drupal</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/12.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">JavaScript</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/13.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">GraphQL</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="producto">
                <a href="producto.html">
                    <img class="producto__imagen" src="img/14.jpg" alt="imagen camisa">
                    
                    <div class="producto__informacion">
                        <p class="producto__nombre">WordPress</p>
                        <p class="producto__precio">$25</p>

                    </div>

                </a>

            </div><!--producto-->

            <div class="grafico grafico--camisas"></div>
            <div class="grafico grafico--node"></div>

        </div>

    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>

    </footer>

</body>

</html>