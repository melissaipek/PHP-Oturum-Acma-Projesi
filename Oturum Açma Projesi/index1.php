<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Oturum Açma İşlemleri</title>
</head>
<body>
	<?php

	// session kontrolü yaparak eğer kullanıcı giriş yapmamışsa giriş formunu yapmışsa panel ekranını gösteriyoruz

	if (!isset ($_SESSION['kadi'])) { ?>

		<h1>Kullanıcı Girişi</h1>

		<form action="islem1.php" method="post">
			
			Kullanıcı Adı <input type="text" required name="kadi">
			Şifre <input type="password" required name="pass">
			<input type="submit" value="Giriş Yap" name="Kullanici_giris">
		</form>

		<?php 

		// İşlemlerden GET değeri döndürüyoruz. Bu sayede işlem durumunu takip edebiliyoruz

		if ($_GET['durum']=="no") {
			echo "Giriş başarısız tekrar deneyin...";
		}
		else if ($_GET['durum']=="cikis") {
			echo "Başarıyla çıkış yapıldı";
		}

		 ?>	
		 
		<?php } else{ ?>
			<!-- Kullancı giriş yapınca göserilecek panel alanı -->
			<h1>Kullancı Paneli</h1>

			<p>Sayın <?php echo $_SESSION['kadi'] ?> hoşgeldiniz</p>

			<!-- sessionları silerek oturumu kapatmak için cikis.php dosyasına link verdik -->
			<a href="cikis1.php"><button>Çıkış Yap</button></a>
	 
	 <?php 
		}
	 ?>


</body>
</html>