<?php



session_start();
$_SESSION['usur']=$usuario;

$usuario=$_POST['usur'];
$contrase=$_POST['cont'];


include("conexion.php");
$con=conexion();

$consulta="SELECT * FROM usuarios where usuario='$usuario' and clave='$contrase'";





$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);         

if($filas){
$_SESSION['username']=$usuario;
header("location:perfil.php");
}else{
?>  
<?php  
include("ingreso.php");

 ?>

<h4 class="bad"> Error en  la autenticacion</h4>
<?php  

}
mysqli_free_result($resultado);
mysqli_close($con); 



 ?>



