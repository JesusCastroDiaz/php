<?php

include("conexion.php");
$con=conexion();







$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$sql="INSERT INTO usuarios VALUES('$identificacion','$nombre','$usuario','$clave')";
$query=mysqli_query($con,$sql);
 
//Header("Location:registro.php");

$var = $usuario ." tu ingreso es correcto";


if($query){
Header("Location:registro.php");

//echo '<h1>ingreso correcto</h1>';

//echo "<script>


 //alert('".$var."');
 //</script>";



}else { }




?>  
