<!-- localhostphpmyadmin veritabanına bağlantıyı sağlayan dosya-->
<?php

try {
  $baglanti=new PDO("mysql:host=localhost; dbname=kullanicigiris", 'root', '');
//  echo "baglandiniz";

} catch (\Exception $e) {
  echo $e->getMessage();
}


 ?>
