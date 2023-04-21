<?php 
// session oturumunu başlattık

session_start();

// İlk olarak form kontrolü yapıyoruz

if (isset($_POST['Kullanici_giris'])) {
	// formdan gelen verileri karşılaştırıyoruz. tanımladığımız giriş bilgileri doğrumu kontrol ediyoruz

	if ($_POST['kadi']=="kodlab" && $_POST['pass']=="123456") {
		
		//Giriş bilgileri doğruysa session atama işlemleri yapıyoruz

		$_SESSION['kadi']=$_POST['kadi'];
		$_SESSION['pass']=$_POST['pass'];

		// Yönlendirme işlemi yapıyoruz. İşlem sonucu takip için durum GET değişkenini tanımlıyoruz

		header("Location:index1.php?durum=ok");
		exit;
	}
	else{
		// İşlem başarısız olduğu zaman işlem sonucu takip için durum GET değişkeni tanımlıyoruz
		header("Location:index1.php?durum=no");
		exit;
	}
}
 ?>
