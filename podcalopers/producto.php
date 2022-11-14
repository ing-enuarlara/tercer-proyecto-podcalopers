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
        <a href="index.html">
            <img class="header__logo" src="img/logo.png" alt="Logotipo">

        </a>

    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.html">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>

    </nav>

    <main class="contenedor">
        <h1>React JS</h1>

        <div class="camisa">
            <img src="img/3.jpg" alt="imagen del producto" class="camisa__imagen">

            <div class="camisa__contenido">
                <p>Nulla nec dui ac mi accumsan blandit. Ut tincidunt mollis convallis. Vivamus dapibus nulla ac posuere
                    laoreet. Fusce tristique semper enim quis condimentum. Nulla interdum, dui vitae mollis ornare, enim urna
                    ultrices lectus, vitae sollicitudin ex orci fringilla tellus. Curabitur luctus arcu quis consequat congue.</p>

                <form class="formulario">
                    <select class="formulario__campo">
                        <option disabled selected>-- Seleccionar Talla --</option>
                        <option>Chica</option>
                        <option>Madiana</option>
                        <option>Grande</option>

                    </select>

                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">

                    <input class="formulario__submit" type="submit" value="Agregar al Carrito">

                </form>

            </div>

        </div>

    </main>

    <footer class="footer">
        <p class="footer__texto">Front End Store - Todos los derechos Reservados 2022.</p>

    </footer>

</body>

</html>