<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color","black");
        $(this).css("color","white");
    });
});
</script>
</head>
<body>
<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
<div id="menu-btn" class="fas fa-bars"></div>
</section>
<div class="heading" style="background:url(https://wallpapers.com/images/featured/autumn-kquin5jg1dtbyxgc.jpg)no-repeat">
    <h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>name:   </span>
                <input type="text" placeholder="enter your name" name="name" id="name" required>
            </div>
            <div class="inputbox">
                <span>email:   </span>
                <input type="email" placeholder="enter your email" name="email" >
            </div>
            <div class="inputbox">
                <span>phone:   </span>
                <input type="number" placeholder="enter your number" name="phone" id="phone" required>
            </div>
            <div class="inputbox">
                <span>address:   </span>
                <input type="text" placeholder="enter your address" name="address" id="address" required>
            </div>
            <div class="inputbox">
                <span>where to:   </span>
                <input type="text" placeholder="enter you want to visit" name="location" id="loc" required>
            </div>
            <div class="inputbox">
                <span>how many:   </span>
                <input type="number" placeholder="enter no. of guests" name="guests" id="guests" required>
            </div>
            <div class="inputbox">
                <span>arrival date:   </span> 
                <input type="date" name="arrivals" id="arrivals" required>
            </div>
            <div class="inputbox">
                <span>leaving date:   </span>
                <input type="date" name="leaving" id="leaving" required>
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send"  onclick="chk()">
    </form>
</section>








<section class="footer">
    <div class="box-container">

    <div class="box">
        <h3>quick links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
    </div>
    <div class="box">
        <h3>extra links</h3>
    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>
    <div class="box">
        <h3>contact info</h3>
    <a href="#"><i class="fas fa-phone"></i>6643523443</a>
    <a href="#"><i class="fas fa-phone"></i>9034567453</a>
    <a href="#"><i class="fas fa-envelope"></i>abc@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>Bangalore, India-560043</a>
    </div>
    <div class="box">
    <h3>follow us</h3>
    <a href="#"><i class="fas fa-facebook"></i>facebook</a>
    <a href="#"><i class="fas fa-twitter"></i>twitter</a>
    <a href="#"><i class="fas fa-instagram"></i>instagram</a>
    <a href="#"><i class="fas fa-linkedin"></i>linkedin</a>
    </div>
    </div>
    <div class="credit">created by<span>Web developer</span>| all rights reserved!</div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>