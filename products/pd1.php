<?php
 session_start();
 include('./../access.php');
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
    <title>Product one | IFitness </title>
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
          <div class="main">
            <img src="../images/1.jpg" id="zoom" alt="" />
          </div>
        </div>
        <div class="right">
          <span>Whey Protein</span>
          <h1>Ghost 100% Whey Protein 2lb<h1>
          <div class="price">$60.21</div>
          <form class="form">
            <input type="text" placeholder="1" />
            <a href="../cart.php" class="addCart">Add To Cart</a>
          </form>
          <h3>Product Detail</h3>
          <p>
            Ghost 100% Whey Protein packs a big protein punch that your body will welcome, 
            thanks to a soy-free, gluten-free and delicious tasting formula. 
            Ghost makes full disclosures about each of the proteins active ingredients,
            so you know exactly what you are putting into your body.

          <h3> Key features to know about Ghost Whey Protein:</h3>

          Ghost Whey is a 100% whey protein blend containing whey protein isolate,
          concentrate and hydrolysate in every scoop.
          Each scoop of Ghost Whey replenishes your body with 26g of protein.*
          Whey protein is a naturally gluten-free option. Ghost Whey is also soy-free.
          If you need a lean protein, Ghost Wheys low fat and carb formula will help meet your weight loss and lean muscle growth targets.
          The protein contains natural digestive enzymes that aid 100% absorption and allow your body to take full advantage of the high-quality protein powder.
          Love the taste of cereal milk? Ghost Whey delivers the wholesome and familiar flavour of cereal milk.
          Ghost Whey can be used to make smoothies or incorporated into baked dishes, oats and pancakes.
          Although whey is best taken within an hour of completing your workout,
          there is no hard and fast rule about when you can consume it.
          Ghost Whey makes a good breakfast snack, post-workout drink and before bedtime drink.
          You can use it in your daily diet at any time during the day.
          You won't find Ghost Whey on a list of amino spiking protein supplements.
          When in doubt, refer to the label that tells you everything transparently.
          *According to the American College of Sports Medicine and the British Nutrition Foundation and many sports nutritionists,
          weight lifters don't need more than 25g of protein to stimulate the muscles ability to grow. 
          However, the recommended amount of protein will depend on your individual goals, age, weight, medical history and other factors.

          Directions: Mix up to 2 scoops with 300-360ml cold water once per day. Adjust the amount of liquid to achieve your desired consistency.
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


    <!--Footer bar-->
    <script src="./js/index.js"></script>
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
