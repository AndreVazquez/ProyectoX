<?php
 include("conex.php");
?>

<html>
  <head><title>Registrate</title>
  </head>

<body>

<form action="" method="POST">

<p align="center"> Nombre:<br/><input name="nombre"/></p> 

<p align="center"> Apellido Paterno:<br/><input name="apellidoPa"/></p> 

<p align="center"> Apellido Materno:<br/><input name="apellidoMa"/></p> 

<p align="center"> Edad:<br/><input name="edad"/></p> 

<p align="center"> Estatura:<br/><input name="estatura"/></p> 

<p align="center"> Peso:<br/><input name="peso"/></p> 

<p align="center"> Sexo:<br/><input name="sexo"/></p> 

<p align="center"><input type="submit" value="Grabar" name="boton"/></p>

</form>

</body>
</html>

<?php 

  if($_POST){

$nombre=$_POST['nombre'];
$apellidoPa=$_POST['apellidoPa'];
$apellidoMa=$_POST['apellidoMa'];
$edad=$_POST['edad'];
$estatura=$_POST['estatura'];
$peso=$_POST['peso'];
$sexo=$_POST['sexo'];


mysql_query("insert into datos(Nombre,ApellidoPaterno,ApellidoMaterno,Edad,Estatura,Peso,Sexo) values('$nombre','$apellidoPa','$apellidoMa','$edad','$estatura','$peso','$sexo')") or die(mysql_error());

echo "Se han enviado los datos";

}
?>
