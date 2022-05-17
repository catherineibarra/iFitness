<?php
session_start();
include('/../access.php');
$isLoggedIn = isset($_SESSION['_reg']);
include('./location.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> Product 18 | iFitness </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- IMPORT CSS -->
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="../css/utilities.css">

  <!-- IMPORT FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- IMPORT VECTORS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
</head>

<body>
  <!-- NAVIGATION BAR -->
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
          <li class="reg-nav"><a href="../register.php">Register</a></li>

        <?php endif; ?>

      </div>
      <li class="search-icon">
        <input type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>

  <!-- BODY-CONTENT -->
  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details product-container">
      <div class="left image-container">
        <div class="slideshow-container">
          <div class="main">
            <div class="mySlides fade">
              <img src="../images/180.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/181.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/182.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/183.jpg" id="zoom" alt="" />
            </div>

          </div>
          <a class="prev  fa-solid fa-arrow-left-long" onclick="plusSlides(-1)"><</a>
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
        <span>MP Seamless 1/4 Zip - Dark Grey Marl For Men</span>
        <h1>Regular fit seamless training 1/4 zip<h1>
            <div class="price">$109</div>

            <form class="form" action="../add2cart.php" method="get">
              <input type="number" value="1" name="quantity" />
              <input type="number" value="18" name="product_id" hidden />
              <button class="addCart" type="submit" style="cursor: pointer;">Add To Cart</button>
            </form>

            <h3>Product Detail</h3>
            <p>
              Whatever your workout plan, our Essentials Seamless range is designed to form the basis of your training wardrobe. It’s designed with an engineered knit that’s built to contour your body, as well as strategically placed mesh inserts for maximum ventilation and seamless construction to minimize irritation.

              Our Essential Seamless 1/4 Zip Top is also made with antibacterial yarn that helps to prevent bad odors, making it an all-around winner to keep you both looking and feeling good while training.

              66% Polyamide 34% Polyester
            </p>
      </div>

    </div>
  </section>


   <!-- RELATED PRODUCTS -->
   <section class="section featured">
    <div class="top container">
      <h1 class="related-h1">Related Products</h1>
      <a class="view-more" href="../shop.php">View more</a>
    </div>
    <div class="product-center container">

      <div class="product-item">
        <div class="overlay">
          <a href="pd15.php" class="product-thumb">
            <img src="../images/150.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FSHEIN Cut Out Sports Bra & Leggings</span>
          <a href="pd15.php">Sports Bra & Leggings</a>
          <h4>$169.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      
      <div class="product-item">
        <div class="overlay">
          <a href="pd16.php" class="product-thumb">
            <img src="../images/160.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Gym Bunny Seamless Long Sleeve Top</span>
          <a href="pd16.php">Seamless Long Sleeve Top</a>
          <h4>$102</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd17.php" class="product-thumb">
            <img src="../images/170.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Seamless Gym Set Sport Suit Workout Sportswear Yoga Set Gym Clothing Tracksuit High Waist</span>
          <a href="pd17.php">Sport Suit Workout Sportswear</a>
          <h4>$129.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd18.php" class="product-thumb">
            <img src="../images/180.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>MP Seamless 1/4 Zip - Dark Grey Marl For Men</span>
          <a href="pd18.php">Regular fit seamless training 1/4 zip</a>
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
          <a href="pd19.php" class="product-thumb">
            <img src="../images/190.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>MP Velocity 1/4 Zip Top - Charcoal Marl For Men</span>
          <a href="pd19.php">1/4 zip top</a>
          <h4>$179.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd20.php" class="product-thumb">
            <img src="../images/201.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>MP Men's Linear Mark Graphic Training 1/4 Zip - Ice Blue</span>
          <a href="pd20.php">Graphic training 1/4 zip</a>
          <h4>$200</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

    </div>
  </section>

  <div class="center py-4">
          <a href = "#">
              <input type="submit" value="Top" name="submit" class="btn btn-secondary" />
            </a>
          </div>

  <!-- FOOTER -->
  <footer>
    <ul>
      <div class="social">
        <a href="https://github.com/catherineibarra/iFitness"><i class="fab fa-github fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-twitter fa-2x"></i></a>
      </div>

      <li>&copy; 2022 iFitness. All Rights Reserved.</li>

      <div class="navbar">
        <li><a href="not-found.html">About Us </a></li>
        <li><a href="not-found.html">Terms and Policy</a></li>
      </div>
    </ul>
  </footer>

  <!-- JS Scripts -->
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

</body>

</html>