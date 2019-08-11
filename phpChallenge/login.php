<?php
  session_start();

  $admin = array(
    'usuario' => 'admin',
    'password' => 'admon'
  );

  function cleanData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = cleanData($_POST['usuario']);
    $password = cleanData($_POST['password']);

    if ($usuario == $admin['usuario'] && $password == $admin['password']) {
      $_SESSION['admin'] = $admin['usuario'];
      header('Location: crud.php');
    } else {
      // echo "ACCESO DENEGADO";
    }
  }
  require 'views/login.view.php';
 ?>
