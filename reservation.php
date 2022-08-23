<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reservation</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">


    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!--font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">

    <!---->
</head>

<body>

<!-- header section starts  -->

<section class="header">

    <a href="MyEventPlanner.php" class="logo">MyEventPlanner</a>
 
    <nav class="navbar">
       <a href="MyEventPlanner.php">Home</a>
       <a href="about.php">About Us</a>
       <a href="services.php">Services</a>
       <a href="gallery.php">Gallery</a>
       <a href="combo.php">Combo</a>
       <a href="reservation.php">Reservation</a>
    </nav>

 </section>
 

 <div class="heading" style="background:url(images/optionsBG.jpg) no-repeat">
   <h1>Book Your Event</h1>
</div>




<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Book your Event</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>Event Type :</span>
            <select placeholder="event type" name="type">
               <option value="Wedding">Wedding</option>
               <option value="Birthday">Birthday</option>
               <option value="Mehfil">Mehfil</option>
               <option value="Party">Party</option>
               <option value="Others">Others</option>
            </select>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Event Date :</span>
            <input type="date" name="date of event">
         </div>

         <div class="inputBox">
            <span>Event Time :</span>
            <select>
               <option value="Lunch">Lunch</option>
               <option value="Dinner">Dinner</option>
               <option value="Afternoon">Afternoon</option>
            </select>
         </div>
         
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->







 <!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
 
       <div class="box">
          <h3>quick links</h3>
          <a href="home.php" style="color:#ffb9ff"><i class="fas fa-angle-right"></i>Home</a>
          <a href="about.php" style="color:#ffb9ff"><i class="fas fa-angle-right"></i>About Us</a>
          <a href="services.php" style="color:#ffb9ff"><i class="fas fa-angle-right"></i>Services</a>
          <a href="gallery.php" style="color:#ffb9ff"><i class="fas fa-angle-right"></i>Gallery</a>
          <a href="combo.php" style="color:#ffb9ff"><i class="fas fa-angle-right"></i>Combo</a>
          <a href="reservation.php" style="color:#ffb9ff"><i class="fas fa-angle-right"></i>Reservation</a>
       </div>
 
       <div class="box">
          <h3>extra links</h3>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-angle-right"></i> ask questions</a>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-angle-right"></i> about us</a>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-angle-right"></i> privacy policy</a>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-angle-right"></i> terms of use</a>
       </div>
 
       <div class="box">
          <h3>contact info</h3>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-phone"></i> +123-456-7890 </a>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-phone"></i> +111-222-3333 </a>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
          <a href="#" style="color:#ffb9ff"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
       </div>
 
       <div class="box">
          <h3>follow us</h3>
          <a href="#" style="color:#ffb9ff"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#" style="color:#ffb9ff"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#" style="color:#ffb9ff"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#" style="color:#ffb9ff"> <i class="fab fa-linkedin"></i> linkedin </a>
       </div>
 
    </div>
 
    <div class="credit"> created by <span>Jaasia & Oyshe</span> | all rights reserved! </div>
 
 </section>
 
 <!-- footer section ends -->
 






















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>