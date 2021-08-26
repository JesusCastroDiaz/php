
<!DOCTYPE html>
<html>
  <head>
    	<meta charset="utf-8">
    	<title>Registro</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
  </head>
  <body>
	<header>
	<a href="index.php">Pagina Inicial</a>
	</header>


	<h1 class="rtitulo">Ingreso</h1>
	<div class="rmaster"> 
    		<form action="insert.php" method="post">
		<br>
		<br>
   		<input type="text" name="identificacion" placeholder="identificacion" required>
		<br>
		<br>    		
		<input type="text" name="nombre" placeholder="nombre" required>
		<br>
		<br>
    		<input type="text" name="usuario" placeholder="usuario" required>
		<br>
		<br>
    		<input type="password" name="clave"  placeholder="contraseña" required>
		<br>
		<br>    
   		 <input type="submit" name="bot2" >
		<br>
		<br> 
		<span>  <a href="ingreso.php">Ingreso</a></span>
	      </form>
	     </div>   
  </body>
</html>

