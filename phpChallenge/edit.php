<?php
  require 'db.php';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM book_saved WHERE id = $id";
    $result = mysqli_query($conexion, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $author = $row['author'];
    $description = $row['description'];
      // echo $title;
      // echo $author;
      // echo $description;
    }
  }

  if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];

    $query = "UPDATE book_saved SET title = '$title', author = '$author', description = '$description' WHERE id = $id";
    mysqli_query($conexion, $query);

    header('Location: crud.php');

      // echo $title;
      // echo $author;
      // echo $description;

  }

 ?>

<?php require 'views/header.php'; ?>
  <h2 class="login-title"> Edit Book</h2>
  <form class="container-login" action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
    <input type="text" name="title" placeholder="title" autofocus value="<?php echo $title; ?>">
    <input type="text" name="author" placeholder="Author" value="<?php echo $author; ?>">
    <textarea name="description" placeholder="Description"><?php echo $description; ?></textarea>
    <button type="submit" name="update" class="btn-send">Update</button>
  </form>
<?php require 'views/footer.php'; ?>
