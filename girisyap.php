<?php session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kalpitap | Kitap, Kırtasiye, Dergi</title>
    <link href="girisyap.css" type="text/css" rel="stylesheet"/>
  </head>
  <body>

<!-- menu bar için html kodları başalngıcı -->

<ul>
  <li><a href="anasayfa.php">Anasayfa</a></li>
  <li><a href="ikinciel.php">İkinci El Kitap</a></li>
  <li><a href="kirtasiye.php">Kırtasiye</a></li>
  <li><a href="dergi.php">Dergi</a></li>
  <li style="float:right"><a href="uyeol.php">Üye Ol</a></li>
  <li style="float:right"><a href="sepet.php">Sepet</a></li>
</ul>

<br><br><br>



<!-- menu bar için html kodları bitimi-->

<!-- Üye Girişi form işlemleri kod başlangıcı -->

<h1>Üye Girişi</h2>

<form action="islem.php" method="post">
  <div class="img-class">
    <img src="img\panda-avatar.png" alt="Avatar" class="avatar">
  </div>

  <p class="login-box-msg">
    <?php
      if(@$_GET['durum']=="hata") {
        $giris_mesaji="Kullanıcı adı veya şifresi hatalı! Lütfen kontrol ediniz.";
        $renk="#FF0000";
        echo"<font color=$renk>$giris_mesaji</font>";
      }
      else{
        echo "Lütfen giriş bilgilerinizi giriniz!";
      }




     ?>

  <div class="tum-form">
    <label for="kullanici_adi"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adınızı Giriniz" name="kullanici_adi" required>

    <label for="kullanici_sifre"><b>Şifre</b></label>
    <input type="password" placeholder="Şifrenizi Giriniz" name="kullanici_sifre" required>

    <button type="submit"  name="giris" >Giriş Yap</button>

  </div>

  <div class="tum-form" style="background-color:#D2EAF1">
    <button type="button" class="iptal-buton">İptal</button>
    <span class="sifre">Şifrenizi mi unuttunuz?<a href="#">Şifremi Unuttum</a></span>
  </div>
</form>


<!--Üye Girişi form işlemleri kod bitimi -->

  </body>
</html>
