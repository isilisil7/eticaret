<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kalpitap | İkinci El Satış</title>
    <link href="style.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>

    <div class="slideshow-class">

    <div class="mySlides fade">
      <img src="img\img_nature_wide.jpg" alt="başarısız" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img\img_snow_wide.jpg" alt="başarısız" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="img\img_mountains_wide.jpg" alt="başarısız" style="width:100%">
    </div>

    <a class="onceki" onclick="plusSlides(-1)">&#10094;</a>
    <a class="sonraki" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="nokta" onclick="currentSlide(1)"></span>
      <span class="nokta" onclick="currentSlide(2)"></span>
      <span class="nokta" onclick="currentSlide(3)"></span>
    </div>




<!-- menu bar için html kodları başalngıcı -->

<ul>
  <li><a href="anasayfa.php">Anasayfa</a></li>
  <li><a class="activeMenu"  href="ikinciel.php">İkinci El Kitap</a></li>
  <li><a href="kirtasiye.php">Kırtasiye</a></li>
  <li><a href="dergi.php">Dergi</a></li>
  <li style="float:right"><a href="girisyap.php">Giriş Yap</a></li>
  <li style="float:right"><a href="sepet.php">Sepet</a></li>
</ul>



<!-- menu bar için html kodları bitimi-->




<!--footer için html kodları başlangıcı-->

<footer>
<h4>Kategoriler</h4>

    <li><a href="kitap_sayfası.php" data-id="kitap-click">Kitap</a>
    <li><a href="kitap_sayfası.php" data-id="kitap-click">Kırtasiye</a>
    <li><a href="kitap_sayfası.php" data-id="kitap-click">Dergi</a>
    <li><a href="kitap_sayfası.php" data-id="kitap-click">2. El Kitap</a>
    </li>


    <br><br><br><br>

  <p  class="iletisim-class">İletişim<br>
  <a href="mailto:hege@example.com">hege@example.com</a></p>
</footer>


<!--footer için html kodları bitimi -->



    <script>

    /*slideshow için script kodları başlangıcı*/
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
      var noktalar = document.getElementsByClassName("nokta");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < noktalar.length; i++) {
          noktalar[i].className = noktalar[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      noktalar[slideIndex-1].className += " active";
    }
    /*slideshow için script kodu bitimi*/
    </script>

  </body>
</html>
