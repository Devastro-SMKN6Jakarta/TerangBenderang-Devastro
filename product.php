<?php require_once "template/data.php" ?>
<?php require_once "template/header.php" ?>


<!-- Banner -->
<section class="banner-page">
  <img src="img/banner.jpg" alt="">
  <div class="container">
    <div class="text-banner-page">
      <h1>Product</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum esse vel quisquam vero porro sed!</p>
    </div>
  </div>
</section>

<!-- Product -->
<section class="product">

  <div class="product-menu container">
    <div class="product-select">
      <select name="" id="">
        <option value="" disabled selected>Filter</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
      </select>

      <select name="" id="">
        <option value="" disabled selected>Category</option>
        <option value="1">Category 1</option>
        <option value="2">Category 2</option>
        <option value="3">Category 3</option>
      </select>
    </div>

    <div class="product-search">
      <input type="text" placeholder="Search">
      <button>Search</button>
    </div>
  </div>

  <div class="product-list container">

    <?php foreach ($product as $data) : ?>

    <!-- item -->
    <div class="product-item">
      <img src="<?= $data['img'] ?>" alt="">
      <div class="prod-item-text">
        <small><?= $data['country'] ?></small>
        <h4><?= $data['name'] ?></h4>
        <p><?= $data['desc'] ?></p>
      </div>
    </div>

    <?php endforeach ?>

  </div>
</section>

<?php require_once "template/footer.php" ?>