<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutimg.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Competitive Pricing: We understand the importance of value for money. Our pricing is competitive, offering you quality products at affordable prices. We regularly compare and adjust our prices to ensure you're getting the best deal possible.</p>
         <p>Fast and Reliable Shipping: We understand the importance of timely delivery. We work with reliable shipping partners to ensure your orders are processed and delivered promptly. You can expect your purchases to arrive at your doorstep in a timely manner.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic1.png" alt="">
         <p>The product categories are clearly organized, making it simple to find what I'm looking for. The checkout process was smooth, and I received my order within the promised timeframe. The customer support team was also responsive and helpful when I had a question.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jhon Weak</h3>
      </div>

      <div class="box">
         <img src="images/pic2.png" alt="">
         <p> I appreciate the detailed product descriptions, specifications, and customer reviews. The search functionality is allowing me to quickly find items ferm the shop. I've always had a positive experience on their website, and their fast shipping make them my top choice to other ecommerce that I encounter.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Coach Bamboo</h3>
      </div>

      <div class="box">
         <img src="images/pic3.png" alt="">
         <p>Their website is easy to navigate, and they have a wide selection of electronics at competitive prices. The customer service is exceptional, with quick response times and helpful staff. I've always received my orders on time, and any issues I've had were promptly resolved.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kap</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Web Designer</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chester Luke Maligaso</h3>
      </div>

      <div class="box">
         <img src="images/author2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Michael Jeff Sajul</h3>
      </div>

      <div class="box">
         <img src="images/author3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>John Israel Lauresta</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>