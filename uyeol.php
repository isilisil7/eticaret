<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Üye Ol</title>
    <link href="uyeol.css" type="text/css" rel="stylesheet"/>
  </head>
<body>

<!-- menu bar kod başlangıcı -->
<ul>
  <li><a href="anasayfa.php">Anasayfa</a></li>
  <li><a href="ikinciel.php">İkinci El Kitap</a></li>
  <li><a href="kirtasiye.php">Kırtasiye</a></li>
  <li><a href="dergi.php">Dergi</a></li>
  <li style="float:right"><a href="girisyap.php">Giriş Yap</a></li>
  <li style="float:right"><a href="sepet.php">Sepet</a></li>
</ul>

<br><br><br>

<!-- menu bar kod bitimi -->

<!-- form işlemleri kod başlangıcı -->

<form action="islem.php" method="post" style="border:1px solid lightblue">
  <div class="form-class">
    <h1>Üye Ol</h1>
    <h2>Kitapların Kalbine Hoşgeldiniz...</h2>
    <p>Aşağıya bilgilerinizi eksiksiz giriniz.</p>
    <hr>

    <div class="img-class">
      <img src="img\uye-ol-avatar.png" alt="Avatar" class="avatar">
    </div>



    <label for="kullanici-adi"><b>Kullanıcı Adı </b></label>
    <input type="text" placeholder="Bir Kullanıcı Adı Belirleyiniz" name="kullanici-adi" required>

    <label for="email"><b>Email </b></label>
    <input type="text" placeholder="E-mail Adresinizi Giriniz" name="email" required>

    <label for="sifre"><b>Şifre</b></label>
    <input type="password" placeholder="Bir Şifre Belirleyiniz" name="sifre" required>

    <label for="sifre-tekrar"><b>Şifre Tekrar</b></label>
    <input type="password" placeholder="Tekrar Şifre Giriniz" name="sifre-tekrar" required>

    <label for="adres"><b>Adres </b></label>
    <input type="text" placeholder="Adresinizi Giriniz" name="adres" required>

    <label for="il"><b>İl </b></label>
    <input type="text" placeholder="İlinizi Giriniz" name="il" required>

    <label for="ilce"><b>İlce</b></label>
    <input type="text" placeholder="İlcenizi Giriniz" name="ilce" required>

    <label for="telefon"><b>Telefon: </b></label>
    <input type="tel" placeholder="Telefonunuzu Giriniz" name="telefon" required>

    <input type="hidden" name="submit" value="1">

    <p>Üyelik sözleşmesini okudum ve onaylıyorum  <a href="#" style="color:lightblue">Terms & Privacy</a>.</p>

    <div class="buton-class">
      <button type="button" class="buton-iptal">İptal Et</button>
      <button type="submit" class="buton-giris" name="kayit">Üye Ol</button>
    </div>
  </div>
</form>

<!-- form işlemleri kod bitimi -->


</body>
</html>
