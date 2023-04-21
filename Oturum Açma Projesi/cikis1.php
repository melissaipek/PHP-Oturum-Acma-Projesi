<?php 

session_start();

// tüm sessionları siliyoruz
session_destroy();

// tekrar oturum açmak için index.php dosyasına yönledirirken işlem sonucunu belirtiyoruz

header("Location:index1.php?durum=cikis");

exit;
 ?>