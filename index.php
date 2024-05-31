<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "ejemplo";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd )

?>


<form method="post">

<input type="text" name="Nombre" placeholder="Nombre">
<input type="text" name="Apellido" placeholder="Apellido">
<input type="text" name="correo" placeholder="correo">
    
<input type= "submit" name="enviar">

</form>

<?php

  if(isset($_POST['enviar'])){
      
      $Nombre = $_POST['Nombre'];
      $Apellido = $_POST['Apellido'];
      $correo = $_POST['correo'];
      
      $insertar = "INSERT INTO datos Values ('$Nombre','$Apellido','$correo','')";
    
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>
