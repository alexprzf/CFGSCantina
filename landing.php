<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantina Pedralbes</title>
</head>
<body>
    <header>
      <?php require_once("imports/header.php"); ?>
    </header>
    <div class="Background" id="content">
      <div class= "NomCantina">Cantina Pedralbes</div>
      <h2 id="Titol">Destacats</h2>
            <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img class="slideImg" src="src/img/slide1.jpg" >
          <div class="text">Donuts</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <img class="slideImg" src="src/img/slide2.jpg" >
          <div class="text">Entrepans</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <img class="slideImg" src="src/img/slide3.jpg" >
          <div class="text">Té</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <img class="slideImg" src="src/img/slide4.jpg" >
          <div class="text">Pastes</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <img class="slideImg" src="src/img/slide5.jpg" >
          <div class="text">Més Pastes</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>

      <!-- The dots/circles -->
      <div class="Punts">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
    </div>
    <footer>
        <?php require_once("imports/footer.php"); ?>
    </footer>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
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
</body>
</html>