<?php

session_start();
$usuario=$_SESSION['username'];

$id=$_POST['ce'];
$no=$_POST['no'];
$us=$_POST['us'];
$cl=$_POST['cl'];;

include("conexion.php");
$con=conexion();



$editar="UPDATE usuarios SET identificacion='$id',nombre='$no',usuario='$us', clave='$cl' where usuario='$usuario'";

$query=mysqli_query($con,$editar);
 
if($editar){header("location:perfil.php");}
?>  
