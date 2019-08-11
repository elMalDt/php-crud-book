<?php

require 'db.php';

if (isset($_POST['save_book'])) {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $description = $_POST['description'];

  // echo $title;
  // echo $author;
  // echo $description;

  $query = "INSERT INTO book_saved(title, author, description) VALUES('$title','$author','$description')";
  $result = mysqli_query($conexion, $query);

  if(!$result){
    die("No se logro la conexion");
  }

  $_SESSION['message'] = 'Book Added Succesfully';
  $_SESSION['message_type'] = 'added';
  // echo "Saved";
  header('Location: crud.php');

}

 ?>
