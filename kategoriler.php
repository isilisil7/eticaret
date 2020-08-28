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


<div class="btn-stil">
        <a href="turkedebiyati.php"><button class="button button1">Türk Edebiyatı</button>
        <a href="dunyaedebiyatı.php"><button class="button button2">Dünya Edebiyatı</button>
        <a href="bilimkurgu.php.php"><button class="button button3">Bilim-Kurgu</button>
        <a href="polisiye.php"><button class="button button4">Polisiye</button>
        <a href="tarih.php"><button class="button button5">Tarih</button>

        <a href="populerbilim.php"><button class="button button6">Popüler Bilim</button>
        <a href="bilimderileri.php"><button class="button button7">Bilim Dergileri</button>
        <a href="bilgisayarkitapları.php"><button class="button button8">Bilgisayar Kitapları</button>
        <a href="felsefe.php"><button class="button button9">Felsefe</button>
        <a href="arastirma.php"><button class="button button10">Araştırma</button>

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
