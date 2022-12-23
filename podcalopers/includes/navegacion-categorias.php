<?php
$activo='';
$cat='';
if(isset($_GET['cat'])){
    $cat=$_GET['cat'];
    $activo='navegacion__enlace--activo';
}
$categorias= $conexionBdComercial->query("SELECT * FROM comercial_categorias WHERE ccat_id_empresa=2");
while($result = mysqli_fetch_array($categorias, MYSQLI_BOTH)){
?>
<a class="navegacion__enlace <?php if($result['ccat_id']==$cat){echo $activo;}?>" href="index.php?cat=<?=$result['ccat_id'];?>"><?=$result['ccat_nombre'];?></a>
<?php }?>