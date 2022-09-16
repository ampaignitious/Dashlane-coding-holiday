<?php include("defaultnav.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="mycss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
</head>



<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">  <h1>Hay, welcome to Dashlane clinic</h1></div>
  <img src="assets/img1.png" style="width:90%">
  <!-- <div class="text">Hay, welcome to Dashlane clinic</div> -->
</div>

<div class="mySlides fade">
  <img src="assets/img4.png" style="width:80%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
<div class="numbertext"><h1 style="text-align:right;">Hay, try our lab services today</h1></div>
  <img src="assets/img6.png" style="width:55%">
  <!-- <div class="text">Caption Three</div> -->
</div>
<!-- javascript page -->
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div class="section2">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptatibus, ipsam labore molestiae modi sit possimus dolorum porro nobis quidem quos consectetur. Enim, quam velit. Nemo similique accusamus corrupti et nisi perspiciatis.</p>

  <img src="assets/img2.png" alt="image" width = "500" height = "300">
</div>
<div class="section2">
<img src="assets/img7.png" alt="image" width = "300" height = "300">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptatibus, ipsam labore molestiae modi sit possimus dolorum porro nobis quidem quos consectetur. Enim, quam velit. Nemo similique accusamus corrupti et nisi perspiciatis.</p>
</div>
<div>
  <p style=" text-align:center; "><a href="welcomepage.php" style="font-size:24px; text-decoration:none; color:rgb(21, 10, 66) text-align:center; ">Back  | Home</a></p>
</div>
<!-- java script page -->
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
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<!-- javascript page -->
</body>
</html>