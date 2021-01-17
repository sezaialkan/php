<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>
	<!-- 
		Php Cookie Kullanımı

		Cookie Bilindiği Üzere Kullanıcının Web Sitesi Ziyareti Sırasında Bıraktığı Kalıntılardır. İngilizce Olarak cookie Türkçe Karşılığı Çerezler Olarak Anılır. Peki Ne İşe Yarar Kısmına Gelirsek Kullanıcın Bıraktığı Kalıntıları, Kullanıcının Siteyi Tekrar Ziyaret Etmesi Durumunda Hatırlamasına Neden Olur. Bunlara Örnek Vermek İstersek de Formlardaki Kullanıcı Adı - Şifre, Kullanıcının Siteyi En Son Ziyaret Tarihi Vs. Gibi Verileri Anlık Veya Süreli Olarak cookie İle Saklayabilirsiniz.

		Cookie Nasıl Oluşturulur ? 

		cookie Oluşturmak İçin setcookie() fonksiyonu İle Oluşturuyoruz. Fonksiyon İçersinde 3 Parametre Alabiliyor. Anahtar Kelime, Değer, fonksiyonun Yaşam Süresi. 
	-->
		<?php 
			setcookie("anahtar","Hello World");
		?>

		<!-- 
		Yukarıda Oluşturulan cookie nin İçersinde 3 Parametre Olan Zaman Değeri Girilmemiştir. Buna Bağlı Olarak cookie nin Yaşam Süresi Kullanıcı Tarayıcıyı Kapatana Kadardır. 
		Eğer Bir Zaman Dilimide Eklemek İstiyorsak Bunu Saniye Cinsinden Belirtmemiz Gerekiyor. Örnek Olarak Bir Gün İçin (60*60*24) Gibi. Aşağıdaki Örnekte time fonkisyonu İle 3600 Saniyelik Bir Zaman Ekleyelim Ve cookie Oluşturulduktan 1 Saat Sonra Silinecektir.
		-->

		<?php 
			setcookie("anahtar","Hello World", time() + 3600);
		?>
		<!-- 
		Cookie Nasıl Silinir ? 

		Oluşturulan cookie Bazen Zamanından Önce Silinmesi Gerekmektedir. Bunun İçin Sadece Zaman Parametresini Eksi Zamana Çevirerek Hallediyoruz. Yukarıda Oluşturulan 1 Saalik cookie İçin Zamanı -3600 Yaparak Silebiliriz. 		 
		-->
		<?php 
			setcookie(
				"anahtar",
				"Hello World", 
				time() - 3600
			);
		?>
		<!-- 
		Cookie Ekrana Yazdırma

			Sayfa Üzerindeki Tüm cookie lere $_COOKIE Dizisi İle Ulaşım Sağlayabiliriz. Değerine Ulaşmak İstediğimiz cookie nin İse Anahtar Kelimesini Girerek Ulaşım sağlayabiliriz. 
		-->
		<?php 
			echo $_COOKIE['anahtar'];
		?>
</body>
</html>