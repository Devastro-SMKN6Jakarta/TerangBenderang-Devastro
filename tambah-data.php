<?php require_once "connection.php" ?>

<?php
if (isset($_POST['submit'])) {

  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

  $extensions = array("jpeg", "jpg", "png", "gif");

  if (in_array($file_ext, $extensions) === false) {
    echo "<script>alert('Extension not allowed, please choose a JPEG or PNG file.')</script>";
  }

  if ($file_size > 2097152) {
    echo "<script>alert('File size must be excately 2 MB')</script>";
  }

  $file_name = time() . '_' . $file_name;
  move_uploaded_file($file_tmp, "upload/" . $file_name);
  $file_name = "upload/" . $file_name;
  $sql = "INSERT INTO product (name, country, description, image, stock, price)
          VALUES
          (:name, :country, :description, :image, :stock, :price)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':country', $_POST['country']);
  $stmt->bindParam(':description', $_POST['description']);
  $stmt->bindParam(':image', $file_name);
  $stmt->bindParam(':stock', $_POST['stock']);
  $stmt->bindParam(':price', $_POST['price']);
  $stmt->execute();

  echo "<script>alert('Data Berhasil Ditambahkan!')</script>";

  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Data</title>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name" required><br>
    <input type="text" name="country" placeholder="country" required><br>
    <textarea name="description" cols="30" rows="10" placeholder="description"></textarea><br>
    <div>
      <label>Image</label>
      <input type="file" name="image" required><br>
    </div>
    <input type="number" name="stock" placeholder="stock" required><br>
    <input type="number" name="price" placeholder="price" required><br>
    <button type="submit" name="submit">Save</button>
  </form>
</body>

</html>