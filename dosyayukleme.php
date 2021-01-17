<!DOCTYPE html>
<html>
<head>
	<title>Dosya Yükleme</title>
	<meta charset="utf-8">
</head>
<body>
<!-- 
	Php İle Dosya Yükleme İşlemi

	Php ile Dosya İşlemi İçin Html Form Elemanlarını Kullanacaığız. Bu Upload İşlemi Biraz Riskli bir İştir, Eğer Tedbirlerinizi Almazsanız. 
	Karşı Taraf Sunucunuza İstediği Bir Dosyayı Yükleyip Elde Etmek İstediği Bilgileri Kolayca Erişebilir. Bu Aşama Sadece Dosya Yükleme İşlemini 
	Yapacağız. Yükleme İşlemini Gerçekleştirebilmemiz İçin Bir Form'a İhtiyacımız Vardır. 
-->
<form method="post" enctype="multipart/form-data">
	<input type="file" name="dName">
	<input type="submit" name="fUpload" value="Dosya Yükle">
</form>

<!-- 
	Yukarıdaki Form Örneğinde Aynı Sayfada Post Methoduyla Bir Tane File Elemenı Bir Tanede Buton Oluşturuyoruz. En Önemli Nokta 
	Form unuza enctype="multipart/form-data" Özelliğini Atamazsanız Dosya Yükleme İşleminiz Gerçekleşmeyecektir.
	Kullanıcı Dosyayı Yükle Dedikten Sonra Dosyanız Geçici Olarak Sunucuya Yüklenecektir. Bunuda $_FILES ın tmp_name i İle Bulunduğu Yerde Bulabiliyoruz. 
	Eğer $_FILES Küresel Değişkeninin Aldığı İndisleri Bilmiyorsanız Buraya Tıklayarak İlgili Makaleye Gidebilirsiniz. 
-->

<?php
	if (isset($_POST['fUpload'])) {
	}
?>

<!-- 
	Yukarıda Bir İf İle fUpload Adındaki Form Post Edilmişse isset İle Bunu Kontrol Edip Çalışmasını İstiyoruz.
-->

<?php 
	if (isset($_POST['fUpload'])) {
		$dir = "file";
		$fileName = $dir."/".$_FILES['dName']['name'];
	}
?>

<!-- 
	Daha Sonra dir Adında Bir Değişken Oluşturuyoruz. Dosyamızın Yükleneceği Konumunu Belirtiyoruz. Daha Sonrasında fileName Değişkeni İçinde Dosyamızın Yükleneceği Konumunu Ve Asıl Dosya İsmini Alıyoruz.
-->

<?php 
	if (isset($_POST['fUpload'])) {
		$dir = "file";
		$fileName = $dir."/".$_FILES['dName']['name'];
		if (@move_uploaded_file($_FILES['dName']['tmp_name'], $fileName)) {
			echo "Dosya Yüklendi";
		}else{
			echo "Dosya Yükleme Başarısız. Hata Kodu : ". $_FILES['dName']['error'];
		}
	}
?>

<!-- 
	Ve Son Olarak Bir İf Daha Oluşturuyoruz. Burada move_uploaded_file Fonksiyonu İle Dosyamızı Sunucudaki $_FILES['dName']['tmp_name'] İle Belirtilen Geçici Konumundan, Bizim fileName Değişkeni İçersinde Belirttiğimiz Konuma Ve Kendi Adına Göre Yüklenmesini İstiyoruz. Eğer Yüklenme Başarılı Olursa Ekrana Dosya Yüklendi Diye Yazdıracaktır. Fakat Bir Aksilik Oldu Else Döngüsü İçersinde $_FILES ın error İndisi İle Hatayı Yakalayıp Ekrana Yazdıracaktır.
-->

<?php 
	if (isset($_POST['fUpload'])) {
		$dir = "file";
		$fileName = $dir."/".$_FILES['dName']['name'];
		if (@move_uploaded_file($_FILES['dName']['tmp_name'], $fileName)) {
			echo "Dosya Yüklendi";
		}else{
			echo "Dosya Yükleme Başarısız. Hata Kodu : ". $_FILES['dName']['error'];
		}
	}
?>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="dName">
	<input type="submit" name="fUpload" value="Dosya Yükle">
</form>

<!-- 	
	Dosya Yükleme İşlemimizin Son Hali Yukarıdaki Gibidir.
-->
</body>
</html>