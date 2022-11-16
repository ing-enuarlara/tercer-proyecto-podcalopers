<?php

    header("Content-Type: text/css; charset: UTF-8");

    include("../conexion.php");
?>
/*font-family: 'Staatliches', cursive;*/
:root{
    --primario:<?=$configuracionColor['gcs_primario'];?>;
    --primarioOscuro:<?=$configuracionColor['gcs_primarioOscuro'];?>;
    --secundario:<?=$configuracionColor['gcs_secundario'];?>;
    --secundarioOscuro:<?=$configuracionColor['gcs_secundarioOscuro'];?>;
    --blanco:<?=$configuracionColor['gcs_blanco'];?>;
    --negro:<?=$configuracionColor['gcs_negro'];?>;

    --fuentePrincipal:'Staatliches', cursive;

}

html{
	box-sizing: border-box;
    font-size: 62.5%;

}

*, *:before, *:after {
    box-sizing: inherit;

}

/**************GLOBALES**************/
body{
    background-color: var(--primario);
    font-size: 1.6rem;
    line-height: 1.5;

}

p{
    font-size: 1.8rem;
    font-family: Arial, Helvetica, sans-serif;
    color: var(--blanco);

}

a{
    text-decoration: none;

}

img{
    width: 100%;

}

.contenedor{
    max-width: 120rem;
    margin: 0 auto;

}

h1, h2, h3{
    text-align: center;
    color: var(--secundario);
    font-family: var(--fuentePrincipal);

}

h1{font-size: 4rem;}
h2{font-size: 3.2rem;}
h3{font-size: 2.4rem;}

/**************HEADER**************/
.header{
    display: flex;
    justify-content: center;

}

.header__logo{
    margin: 2rem 0;

}

/**************FOOTER**************/
.footer{
    background-color: var(--primarioOscuro);
    padding: .5rem 0;
    margin-top: 2rem;

}
.footer__texto{
    font-family: var(--fuentePrincipal);
    text-align: center;
    font-size: 2.2rem;

}

/**************NAVEGACION**************/
.navegacion{
    background-color: var(--primarioOscuro);
    padding: .5rem 0;
    display: flex;
    justify-content: center;
    gap: 2rem;

}

.navegacion__enlace{
    font-family: var(--fuentePrincipal);
    color: var(--blanco);
    font-size: 2rem;

}

.navegacion__enlace--activo,
.navegacion__enlace:hover{
    color: var(--secundario);

}

/**************GRID**************/
.grid{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;

}

@media (min-width: 768px) {
    .grid{
        grid-template-columns: repeat(3, 1fr);
    
    }
    
}

/**************PRODUCTO**************/
.producto{
    background-color: var(--primarioOscuro);
    padding: 1rem;

}

.producto__nombre{
    font-size: 4rem;

}

.producto__precio{
    font-size: 2.8rem;
    color: var(--secundario);

}

.producto__nombre,
.producto__precio{
    font-family: var(--fuentePrincipal);
    margin: 1rem 0;
    text-align: center;
    line-height: 1.2;

}

.producto__submit{
    background-color: var(--secundario);
    border: none;
    font-size: 2rem;
    font-family: var(--fuentePrincipal);
    padding: 2rem;
    transition: background-color .3s ease;
    text-align: center;
    width: 100%;

}

.producto__submit:hover{
    cursor: pointer;
    background-color: var(--secundarioOscuro);

}

/**************GRAFICO**************/
.grafico{
    min-height: 30rem;
    background-repeat: no-repeat;
    background-size: cover;
    grid-column: 1/3;

}

.grafico--primerBanner{
    grid-row: 2/3;
    background-image: url(../../../admin/files/banner/<?=$configuracion['conf_primerBanner'];?>);

}

.grafico--segundoBanner{
    background-image: url(../../../admin/files/banner/<?=$configuracion['conf_segundoBanner'];?>);
    grid-row: 8/9;

}

@media (min-width: 768px) {
    .grafico--segundoBanner{
        grid-row: 5/6;
        grid-column: 2/4;

    }

}

/**************NOSOTROS**************/
.nosotros{
    display: grid;
    grid-template-rows: repeat(2, auto);

}

@media (min-width: 768px) {
    .nosotros{
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2rem;
    
    }

}

.nosotros__imagen{
    grid-row: 1/2;

}

@media (min-width: 768px) {
    .nosotros__imagen{
        grid-column: 2/3;
    
    }

}

/**************BLOQUES**************/
.bloques{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;

}

@media (min-width: 768px) {
    .bloques{
        grid-template-columns: repeat(4, 1fr);

    }
}

.bloque{
    text-align: center;

}

.bloque__titulo{
    margin: 0;

}

/**************PAGINA DEL PRODUCTO**************/
@media (min-width: 768px) {
    .camisa{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2rem;

    }

}

.formulario{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;

}

.formulario__campo{
    border: 1rem solid var(--primarioOscuro);
    background-color: transparent;
    color: var(--blanco);
    font-size: 2rem;
    font-family: Arial, Helvetica, sans-serif;
    padding: 1rem;
    appearance: none;

}

.formulario__submit{
    background-color: var(--secundario);
    border: none;
    font-size: 2rem;
    font-family: var(--fuentePrincipal);
    padding: 2rem;
    transition: background-color .3s ease;
    grid-column: 1/3;

}

.formulario__submit:hover{
    cursor: pointer;
    background-color: var(--secundarioOscuro);

}