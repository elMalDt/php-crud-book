<?php

  require 'db.php';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM book_saved WHERE id = $id";

    $result = mysqli_query($conexion, $query);

    if (!$result) {
      die("No se pudo eliminar");
    }

      header('Location: crud.php');

  }

 ?>
