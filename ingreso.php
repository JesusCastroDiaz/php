<?php 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingreso</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
  </head>
  <body>
<header>
<a href="index.php">Pagina Inicial</a>
</header>


     <div class="inmaster"> 
      <form action="login.php" method="post">
	<input type="text"  name="usur"placeholder="Usuario" required>
	<br>
	<br>
	<input type="password" name="cont" placeholder="Contraseña" required>
	<br>
	<br>
	<input type="submit" name="bot" value="Ingresar" >
	<BR>
	<br>
	<span>  <a href="registro.php">Registro</a></span>
      </form>
     </div> 

  </body>
</html>

