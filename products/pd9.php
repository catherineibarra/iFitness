<?php
 session_start();
 include('/../access.php');
 $isLoggedIn = isset($_SESSION['_reg']);
 include('./location.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../utilities.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"  
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
    <title>Product nine | IFitness </title>
  </head>
  <body>
    <!--header bar-->
    <div class="navbar">
      <div class="container flex">
        <h1 class="logo">IFitness</h1>
        <nav>
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../shop.php">Shop</a></li>
          </ul>
        </nav>
        <nav>
          <ul>
            <li><input type="text" placeholder="Search..." /></li>
            <li>
              <button type="submit"><i class="fa fa-search"></i></button>
            </li>
          </ul>
        </nav>
        <nav>
          <ul>
            <li><a href="../cart.php">Cart</a></li>
            <?php if ($isLoggedIn): ?>
              <li><a href="?profile=profile">welcome <?=$_SESSION["_reg"]?></a></li>
                <li><a href="?logout=logout">Logout</a></li>

                <?php else: ?>
              <li><a href="../login.php">Login</a></li>
              <li><a href="../register.php">Register</a></li>

              <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Center screen-->
    <!-- Product Details -->
    <section class="section product-detail">
      <div class="details product-container">
      <div class="left image-container">
        <div class="slideshow-container">
          <div class="main">
            <div class="mySlides fade">
              <img src="../images/9.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/9.1.jpg" id="zoom" alt="" />
            </div>
            
          </div>
          <a class="prev  fa-solid fa-arrow-left-long" onclick="plusSlides(-1)"><</a>
          <a class="next  fa-solid fa-arrow-right-long" onclick="plusSlides(1)">></a>
        </div>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          
        </div>

        </div>
        <div class="right">
          <span>Rich Piana 5% Nutrition Bigger By The Day Muscle Builder 90 capsules</span>
          <h1>Muscle Builder 90 capsules<h1>
          <div class="price">$77</div>
        
          <form class="form">
            <input type="text" placeholder="1" />
            <a href="../cart.php" class="addCart">Add To Cart</a>
          </form>
          <h3>Product Detail</h3>
          <p>
            Rich Piana 5% Nutrition Bigger By The Day Muscle Builder 90 capsules
Rich Piana 5% Nutrition Bigger By The Day is an all-natural muscle builder that is without a doubt the strongest formula of it’s kind on the market.
This is a formula that’s so hardcore, only 5% Nutrition could have created it!<br>

When it comes to natural muscle builders, there’s a number of products currently available that like to brag about how hardcore they are. 
You’ve seen the ads and heard the hype. Enough of the garbage out there, we’ve all listened to it long enough and decided it was time to step in and show them how the big boys do it.
 5% Nutrition has defined the word ‘hardcore’ of the supplements world for years and has designed the most potent legal muscle builder on the market – Bigger By The Day!<br>

We took the strongest legal, all-natural muscle building ingredients available and combined them into one incredible product, and we dared to make it stronger than any other product of its kind.<br>

On your first two days, take 1 capsule with your first meal of the morning and 1 capsule with a light high protein snack before bed. On day three, increase to 1 capsule three times a day (with breakfast, lunch and dinner). 
Do not exceed more than 3 capsules per day.<br>
          </p>
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
              <a href="pd2.php" class="product-thumb">
                <img src="../images/2.jpg" alt="" />
              </a>
            </div>
            <div class="product-info">
              <span>Scientifically formulated to be high in protein for muscle recovery</span>
              <a href="pd2.php">Musashi High Protein Chocolate 2kg</a>
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
              <span class="discount">40% off</span>
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
        <script
        src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
        crossorigin="anonymous"
        ></script>
        <script src="./js/zoomsl.min.js"></script>
        <script>
          $(function () {
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
