<?php
session_start();
include('/../access.php');
$isLoggedIn = isset($_SESSION['_reg']);
include('./location.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="../css/utilities.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title> Product Two | iFitness </title>
</head>

<body>
  <!--header bar-->
  <nav>
    <ul>
      <li class="logo"><img src="../images/logo3.png"></li>
      <div class="navbar">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../shop.php">Shop</a></li>

        <li><a href="../cart.php">My Cart</a></li>
        <?php if ($isLoggedIn) : ?>
          <li><a href="?profile=profile">My Account</a></li>
          <li><a href="?logout=logout">Logout</a></li>

        <?php else : ?>
          <li><a href="../login.php">Login</a></li>
          <li><a href="../register.php">Register</a></li>

        <?php endif; ?>

      </div>
      <li class="search-icon">
        <input type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>
  <!-- Center screen-->
  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details product-container">
      <div class="left image-container">
        <div class="slideshow-container">
          <div class="main">
            <div class="mySlides fade">
              <img src="../images/2.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/2.1.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/2.2.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/2.3.jpg" id="zoom" alt="" />
            </div>

          </div>
          <a class="prev  fa-solid fa-arrow-left-long" onclick="plusSlides(-1)">
            << /a>
              <a class="next  fa-solid fa-arrow-right-long" onclick="plusSlides(1)">></a>
        </div>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>
      </div>

      <div class="right">
        <span>Protein Shake</span>
        <h1>Musashi High Protein Chocolate 2kg<h1>
            <div class="price">$76.49</div>
            <form class="form" action="/add2cart.php" method="get">
              <input type="number" value="1" name="quantity" />
              <input type="number" value="2" name="product_id" hidden />
              <button class="addCart" type="submit" style="cursor: pointer;">Add To Cart</button>
            </form>

            <h3>Product Detail</h3>
            <p>
              Scientifically formulated to be high in protein for muscle recovery, MUSASHI HIGH PROTEIN contains quality protein sources in a delicious tasting shake.
              Combining instantised whey protein concentrate, whey protein isolate and milk protein solids, each serve delivers 30 grams of quality protein to help reach your training goals.
              General Information
              Scientifically formulated to be high in protein for muscle recovery, MUSASHI HIGH PROTEIN contains quality protein sources in a delicious tasting shake.
              Combining instantised whey protein concentrate, whey protein isolate and milk protein solids, each serve delivers 30 grams of quality protein to help reach your training goals.
              Warnings
              Contains: Milk, Soy Products
              Ingredients
              Musashi Bulk Protein Blend (65%) [Whey Protein Concentrate, Skim Milk Powder, Whey Protein Isolate, Whole Milk Powder, Emulsifiers (Soy Lecithin, Sunflower Lecithin)], Maltodextrin, Dextrose, Cocoa Powder, Vitamins & Minerals (Dicalcium Phosphate, Dipotassium Phosphate, Magnesium Carbonate, Zinc Gluconate, Ferric Pyroosphate, Maltodextrin, Sodium Ascrobate, Vitamin E Acetate, Nicotinamide, Vitamin A Acetate, Vitmain D3, Vitamin B12, Potassium Iodide, Vitamin B6, Vitamin B2, Vitamin B1, Folic Acid), Flavours, Vegetable Gum (Guar Gum), Sweetener (Sucralose), Acidity Regulator (Citric Acid)

              Directions:
              When taking P High Protein as a post-exercise protein shake to support your recovery, aim to consume within 30 minutes of completing exercise to help maximise effectiveness.
      </div>
    </div>
  </section>


  <!-- Related -->
  <section class="section featured">
    <div class="top container">
      <h1>Related Products</h1>
      <a href="#" class="view-more">View more</a>
    </div>
    <div class="product-center container">
      <div class="product-item">
        <div class="overlay">
          <a href="pd1.php" class="product-thumb">
            <img src="../images/1.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Whey Protein</span>
          <a href="pd1.php">Ghost 100% Whey Protein 2lb</a>
          <h4>$76.49 </h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="pd3.php" class="product-thumb">
            <img src="../images/3.jpg" alt="" />
          </a>
          <span class="discount">40%</span>
        </div>
        <div class="product-info">
          <span>Excellent Supplement for the reduction of glucocorticoid hormones</span>
          <a href="pd3.php">Muscle Matrix - 60 vcaps (25mg per capsule)</a>
          <h4>$109</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="pd4.php" class="product-thumb">
            <img src="../images/4.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Enhanced muscle-building</span>
          <a href="pd4.php">Scream Supps PINHEAD 1 Serve Sample</a>
          <h4>$3.96</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="pd5.php" class="product-thumb">
            <img src="../images/5.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>ENERGY UP </span>
          <a href="pd5.php">NIVERSAL ANIMAL ENERGY 60 CAPSULES</a>
          <h4>$29</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd6.php" class="product-thumb">
            <img src="../images/6.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Muscle building vitamins for men - stamina booster for men </span>
          <a href="pd6.php">BODYBUILDING PILLS FOR MEN</a>
          <h4>$39</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd7.php" class="product-thumb">
            <img src="../images/7.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Explosive energy, heightened focus and an overwhelming urge to tackle any challenge</span>
          <a href="pd7.php">Cellucor C4 Original ID 60 Serves</a>
          <h4>$68.9</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd8.php" class="product-thumb">
            <img src="../images/8.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Brutaler Pump im Training</span>
          <a href="pd8.php">Rich Piana 5% Nutrition Freak Show</a>
          <h4>$79</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd9.php" class="product-thumb">
            <img src="../images/9.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Natural muscle builder </span>
          <a href="pd9.php">Rich Piana 5% Nutrition Bigger By The Day Muscle Builder 90 capsules</a>
          <h4>$77</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

    </div>
  </section>

  <!--Footer bar-->
  <script src="./js/index.js"></script>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" crossorigin="anonymous"></script>
  <script src="./js/zoomsl.min.js"></script>
  <script>
    $(function() {
      console.log("hello");
      $("#zoom").imagezoomsl({
        zoomrange: [4, 4],
      });
    });
  </script>

  <footer class="footer bg-primary py-3">
    <div class="container grid grid-3">
      <!--Social media parts-->
      <div class="social">
        <a href="#"><i class="fab fa-github fa-2x"></i></a>
        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
      </div>
      <div>
        <ul>
          <li>Copyright &copy; IFitness. All Rights reserved. 2022</li>
        </ul>
      </div>
      <nav>
        <!--pages for like others, more about us etc.-->
        <ul>
          <li><a href="../cart.php">Cart</a></li>
          <li><a href="../login.php">Login</a></li>
          <li><a href="../register.php">Register</a></li>
        </ul>
      </nav>
      <!-- Custom Script -->
    </div>
  </footer>

</body>

</html>