<?php
include("conexion.php");
$con=conexion();

session_start();
$usuario=$_SESSION['username'];


//<?php 
//$consulta= $con-> query("select * from usuarios where usuario='$usuario'");
//while($row=$consulta-> fetch_array()){
//echo $row['identificacion'];
//}
?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"> 
    <title>registrar</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
  </head>
  <body>
<div class="perfil">
<h1>Hola</h1>
<p class="pnombre" action"perfil.php"> <?php  echo $usuario ?> </p>

<br/>
<br/>




<table class="tabla2">
  <tr> <th>Identificacion</th> <th>Nombre</th>  <th>Usuario</th>  <th>clave</th>   </tr>
<?php 


$consulta= $con-> query("select * from usuarios where usuario='$usuario'");

while($row=$consulta-> fetch_array()){

?>
<tr>
<td><?php  echo $row['identificacion'] ?></td>
<td><?php  echo $row['nombre'] ?></td>
<td><?php  echo $row['usuario'] ?></td>
<td><?php  echo $row['clave'] ?></td>
</tr>








</table>
<br/>

<br/>


 



<form action="editar.php" method="post">
<input class="" type="text" name="ce" value="<?php echo $row['identificacion']?>" required> <br/><br/>
<input class="" type="text" name="no" value="<?php echo $row['nombre']?>"  required> <br/><br/>
<input class="" type="text" name="us" value="<?php echo $row['usuario']?>"  required> <br/><br/>
<input class="" type="text" name="cl" value="<?php echo $row['clave']?>"   required> <br/><br/>
<input type="submit" value="Actualizar"> <br/>
</form>

<?php
}
?>





<br/>
<br/>
<br/>



<a class="salir" href="salir.php">Salir</a>
<div>









  </body>

</html>