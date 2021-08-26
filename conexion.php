
<?php
 function conexion(){
   $host="localhost";
   $user="root";
   $pass="";

  $dbase="adsi";

 $con=mysqli_connect($host,$user,$pass);

 mysqli_select_db($con,$dbase);
  
    return $con;
 }

?>

