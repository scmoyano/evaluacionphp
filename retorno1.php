
  <?php
  $usuario= $_POST['usuario'];
  $password = $_POST['password'];
  $pin = $_POST['pin'];

  $usuario001 = "sosuna";
  $pass = 12345;
  $pins = 321;


  if ($usuario == $usuario001 && $password == $pass && $pin == $pins  ){
    header('location: bienvenido.php');
  }
  else{
    echo 'Hubo un problema con el inicio de sesion, intento nuevamente' ;

  }
  
  ?>
