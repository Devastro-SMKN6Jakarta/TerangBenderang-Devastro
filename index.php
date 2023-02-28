<?php require_once "connection.php" ?>

<?php

// Get Product
$sql = "SELECT * FROM product";
$stmt = $conn->prepare($sql);
$stmt->execute();
$product = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require_once "template/header.php" ?>

<!-- Banner -->
<section class="banner">
  <img src="img/banner.jpg" alt="">
  <div class="container">
    <div class="text-banner">
      <h1>We Try To Color</h1>
      <p>Bringing lighting solution to life. We made this special things for you. <br>We make your day colorful.</p>
      <a href="#">See More</a>
    </div>
  </div>
</section>

<!-- Product -->
<section class="product">
  <h1 class="section-title">Our Product</h1>

  <div class="product-list container">

    <?php foreach ($product as $data) : ?>

      <!-- item -->
      <div class="product-item">
        <img src="<?= $data['image'] ?>" alt="">
        <div class="prod-item-text">
          <small><?= $data['country'] ?></small>
          <h4><?= $data['name'] ?></h4>
          <p><?= $data['description'] ?></p>
        </div>
      </div>

    <?php endforeach ?>

  </div>

  <div class="section-link">
    <a href="#">See More</a>
  </div>
</section>

<!-- compamnies -->
<section>
  <h1 class="section-title">Companies</h1>
  <div class="container companies">

    <!-- item -->
    <div class="comp-logo">
      <img src="img/logo-1.png" alt="">
    </div>

    <!-- item -->
    <div class="comp-logo">
      <img src="img/logo-2.png" alt="">
    </div>

    <!-- item -->
    <div class="comp-logo">
      <img src="img/logo-3.png" alt="">
    </div>

    <!-- item -->
    <div class="comp-logo">
      <img src="img/logo-4.png" alt="">
    </div>
  </div>
</section>

<!-- Our team -->
<section>
  <h1 class="section-title">Our Team</h1>
  <div class="container our-team">

    <!-- item -->
    <div class="team-item">
      <img src="img/team-1.jpg" alt="">
      <h3>Elon</h3>
      <h4>CEO</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
    </div>

    <!-- item -->
    <div class="team-item">
      <img src="img/team-2.jpg" alt="">
      <h3>Affandi</h3>
      <h4>Artisan</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
    </div>

    <!-- item -->
    <div class="team-item">
      <img src="img/team-3.jpg" alt="">
      <h3>IU</h3>
      <h4>Creator</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
    </div>

  </div>
</section>

<?php require_once "template/footer.php" ?>