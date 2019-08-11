<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <header class="logos">
      <a href="#">
        <img src="img/Logo-UNAM.png" alt="UNAM Oficial">
      </a>
      <a href="#">
        <img src="img/logo_fesa.png" alt="FES Acatlán">
      </a>
    </header>
    <nav class="navi-bar">
      <h1 class="main-logo"> <a href="index.html"> HBT</a></h1>
      <div class="btn-nav-group">
        <a href="#"> <button type="button" class="btn-tran" name="button">  About  </button> </a>
        <a href="#"> <button type="button" class="btn-tran" name="button">  Contact  </button> </a>
      </div>
    </nav>
    <h1 class="login-title">Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="container-login" method="post">
      <input type="text" name="usuario" placeholder="Correo">
      <input type="password" name="password" placeholder="Contraseña">
      <button type="submit" name="button" class="btn-send"> Iniciar Sesion</button>
    </form>
  </body>
  </html>
