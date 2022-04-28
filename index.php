<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ushakal</title>
     <?php
      $page='index';
  include 'links/links.php';
    ?>
    
</head>    

<body>
  <?php
  include 'includes/navbar.php';
  ?>
  



  <section id="home">
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel/crochet.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Beautiful Crochet</h5>
        <a href="cart.php"><button class="main-btn ms-lg-4 mt-lg-0 mt-4">Shop now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/carousel/handbag.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Handbag</h5>
        <a href="cart.php"><button class="main-btn ms-lg-4 mt-lg-0 mt-4">Shop now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/carousel/sweater.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sweater</h5>
        <a href="cart.php"><button class="main-btn ms-lg-4 mt-lg-0 mt-4">Shop now</button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>



   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>