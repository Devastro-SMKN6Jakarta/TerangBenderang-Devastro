<?php require_once "connection.php" ?>

<?php
if (isset($_POST['submit'])) {
  $sql = "INSERT INTO product (name, country, description, image, stock, price)
          VALUES
          (:name, :country, :description, :image, :stock, :price)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':country', $_POST['country']);
  $stmt->bindParam(':description', $_POST['description']);
  $stmt->bindParam(':image', $_POST['image']);
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
  <form action="" method="post">
    <input type="text" name="name" placeholder="name" required><br>
    <input type="text" name="country" placeholder="country" required><br>
    <textarea name="description" cols="30" rows="10" placeholder="description"></textarea><br>
    <input type="text" name="image" placeholder="image" required><br>
    <input type="number" name="stock" placeholder="stock" required><br>
    <input type="number" name="price" placeholder="price" required><br>
    <button type="submit" name="submit">Save</button>
  </form>
</body>

</html>