<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kalpitap | Kitap, Kırtasiye, Dergi</title>
    <link href="stilKategori.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>


        <!-- menu bar için html kodları başlangıcı -->


        <ul>
          <li><a href="anasayfa.php">Anasayfa</a></li>
          <li><a href="ikinciel.php">İkinci El Kitap</a></li>
          <li><a href="kirtasiye.php">Kırtasiye</a></li>
          <li><a href="dergi.php">Dergi</a></li>
          <li style="float:right"><a href="girisyap.php">Giriş Yap</a></li>
          <li style="float:right"><a href="sepet.php">Sepet</a></li>
        </ul>

        <!-- menu bar için html kodları bitimi-->

        <div class="bosluk">
            &nbsp;
        </div>


        <div class="baslik">
          <h2>En Seçkin Ürünler Burada</h2>
        </div>




<div class="btn-stil">
        <a href="notdefterleri.php"><button class="button button1">Not Defterleri</button></a>
        <a href="a4boydefterler.php"><button class="button button2">A4 Boy Defterler</button></a>
        <a href="a5boydefterler.php"><button class="button button3">A5 Boy Defterler</button></a>
          <br>
          <hr>
        <a href="kursunkalem.php"><button class="button button4">Kurşun Kalem</button></a>
        <a href="tukenmezkalem.php"><button class="button button5">Tükenmez Kalem</button></a>
        <a href="rotring.php"><button class="button button6">Rotring Mekanik Uçlu Kalem</button></a>
        <a href="tombow.php"><button class="button button7">Tombow Mekanik Uçlu Kalem</button></a>
        <a href="faber.php"><button class="button button8">Faber Castell Mekanik Uçlu Kalem</button></a>
        <a href="micro.php"><button class="button button9">Micro Mekanik Uçlu Kalem</button></a>
          <br>
          <hr>
        <a href="fodforlukalem.php"><button class="button button10">Fosforlu Kalem</button></a>
        <a href="kecelikalem.php"><button class="button button1">Keçeli Kalem</button></a>
        <a href="jelkalem.php"><button class="button button2">Jel Mürekkep Kalem</button></a>
          <br>
          <hr>
        <a href="kalemucu.php"><button class="button button3">Mekanik Kalem Ucu</button></a>
        <a href="silgi.php"><button class="button button4">Silgi</button></a>
        <a href="postit.php"><button class="button button5">Post-it</button></a>
          <br>
          <hr>
        <a href="resimmalzemeleri.php"><button class="button button6">Resim Malzemeleri</button></a>



</div>


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
