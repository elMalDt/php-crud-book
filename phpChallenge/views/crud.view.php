<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD System</title>
    <script src="https://kit.fontawesome.com/ca5c5f0411.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilos.css">
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
      <h1 class="main-logo"> <a href="index.php"> Home </a></h1>
      <div class="btn-nav-group">
        <a href="close.php"> <button type="button" class="btn-tran" name="button"> Cerrar Sesiòn  </button> </a>
      </div>
    </nav>
    <h2 class="login-title"> Crud Of Books</h2>
    <form class="container-login" action="save.book.php" method="post">
      <input type="text" name="title" placeholder="title" autofocus>
      <input type="text" name="author" placeholder="Author">
      <textarea name="description" placeholder="Description"></textarea>
      <button type="submit" name="save_book" class="btn-send">Publicar</button>
    </form>

    <div class="">
      <table class="content-table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Date Info</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $query = "SELECT * FROM book_saved";
          $result_book = mysqli_query($conexion, $query);

          while ($row = mysqli_fetch_array($result_book)) { ?>

            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['date_capt']; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $row['id']; ?>">
                    <i class="far fa-edit"></i>
                  </a>
                  <a href="delete.php?id=<?php echo $row['id']; ?>">
                    <i class="far fa-trash-alt"></i>
                  </a>
                  <a href="" onclick="loan();">
                    <i class="fas fa-sign-language"></i>
                  </a>
                </td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
    <script src="js/index.js" charset="utf-8"></script>
  <?php require 'views/footer.php'; ?>
