<?php
session_start();
include('access.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> Home | iFitness </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- IMPORT CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="css/awesome.css">

  <!-- IMPORT FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- IMPORT VECTORS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
</head>

<body>
  <!-- NAVIGATION BAR -->
  <nav>
    <ul>
      <li class="logo"><img src="./images/logo3.png"></li>
      <div class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>

        <li><a href="cart.php">My Cart</a></li>
        <?php if ($isLoggedIn) : ?>
          <li><a href="?profile=profile">My Account</a></li>
          <li><a href="?logout=logout">Logout</a></li>

        <?php else : ?>
          <li><a href="login.php">Login</a></li>
          <li class="reg-nav"><a href="register.php">Register</a></li>

        <?php endif; ?>

      </div>
      <li class="search-icon">
        <input type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>

  <!-- BODY-CONTENT -->
  <div class="faq-center">
    <h2 class="faq-h2">Frequently Asked Questions</h2>
    <p><b>Payment</b></p>
    <button class="accordion">How do I pay for my order?</button>
    <div class="panel">
      <p>You can pay either by credit or debit card - Visa or Mastercard.</p>
    </div>

    <button class="accordion">What happens if my card is declined?</button>
    <div class="panel">
      <p>If your creditor debit card is declined by your financial institution we will contact you to make alternative payment arrangements. We can only release your order for collection or delivery once it has been paid.</p>
    </div>

    <p><b>Account</b></p>
    <button class="accordion">How do I edit my profile information?</button>
    <div class="panel">
      <p>You need to be logged in to change your profile information. Go to 'My Account' and select 'Edit Profile', then you can update your profile there!.</p>
    </div>

    <p><b>Orders</b></p>
    <button class="accordion">How far in advance can I order?</button>
    <div class="panel">
      <p>You can order up to 7 days in advance of the day you want to collect your shopping or get your shopping delivered. Occasionally we may release timeslots early which will be displayed within the timeslot selection dropdown.</p>
    </div>

    <button class="accordion">Do I need to save my trolley as I shop?</button>
    <div class="panel">
      <p>Your trolley will be saved automatically if you are logged in. Items will remain in your trolley until you purchase them. No matter what device you sign in from you’ll be able to see any items you’ve added. Please keep in mind that specials and deals are only available for a certain period of time and will be priced at the date the order is submitted.</p>
    </div>

    <button class="accordion">How do I know that my order has been successfully placed?</button>
    <div class="panel">
      <p>Once you've checked out, you'll receive a confirmation email, detailing all the products, quantities and an estimated order value.</p>
    </div>

    <p><b>Delivery</b></p>
    <button class="accordion">When will my order be shipped?</button>
    <div class="panel">
      <p>Usually your order will be dispatched within 24 hours, except on weekends or public holidays. We are closed for 10 days over the Christmas and New Year period. Please be patient, we'll get your order to you as soon as we can.</p>
    </div>

    <button class="accordion">How long is shipping?</button>
    <div class="panel">
      <p>Shipping is 1 - 3 working days for urban NZ addresses. Please allow an extra 2 - 3 days for rural delivery.</p>
    </div>

    <button class="accordion">Do you ship Internationally?</button>
    <div class="panel">
      <p>Yes, we ship worldwide. The cost of international shipping is calculated at the checkout and depends on the weight of the order. International orders require up to 10 working days for shipping.</p>
    </div>
  </div>

  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>

  <!-- FOOTER -->
  <footer class="nothing">
    <ul>
      <div class="social">
        <a href="https://github.com/catherineibarra/iFitness"><i class="fab fa-github fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-twitter fa-2x"></i></a>
      </div>

      <li>&copy; 2022 iFitness. All Rights Reserved.</li>

      <div class="navbar">
        <li><a href="faq.php"> FAQ </a></li>
        <li><a href="not-found.html">Terms and Policy</a></li>
      </div>
    </ul>
  </footer>
</body>

</html>