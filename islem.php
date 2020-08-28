<!-- islem.php dosyamız, uyeol.php sayfasından "Üye Ol" butonuna basıldığında müşteriyi sitemize kayıt edecek php dosyasıdır. -->
<?php  require_once 'baglanti.php';

if(isset($_POST['giris'])) {
  $kullanici_adi=htmlspecialchars($_POST['kullanici_adi']);
  $kullanici_sifre=htmlspecialchars($_POST['kullanici_sifre']);
  $guclukullanici_sifre=md5($kullanici_sifre);

  $kullanici_kayitli_mi=$baglanti->prepare("SELECT * from kullanicilar where kullanici_adi=:kullanici_adi and kullanici_sifre=:kullanici_sifre");
  $kullanici_kayitli_mi->execute(array(
    'kullanici_adi'=>$kullanici_adi,
    'kullanici_sifre'=>$kullanici_sifre
  ));

  $var=$kullanici_kayitli_mi->rowCount();

  if($var > 0 ) {
    $_SESSION['normalgiris']=$kullanici_adi;
    Header("Location:anasayfa?durum=hosgeldin");

  }

  else{
    Header("Location:girisyap?durum=hata");
  }
}




?>
