<!DOCTYPE html>
<html>
<head>
	<title>Dosya Uzantı Kontrolü</title>
	<meta charset="utf-8">
</head>
<body>
<!-- 
	Dosya Uzantı Kontrolü
	
	Dosya Yükleme Sırasında, Kullanıcıya Yüklenecek Dosyanının Uzantısı İçin Koşul Belirleyebiliriz. Aksi Takdirde Kötü Amaçlı 
	Kullanıcıların Ammellerine Hedef Olunabilir.
-->

<?php 
	$dosya_adi= "fileName.png";
	$uzanti = ['png','jpg','ico'];

	$ext=strtolower(substr($dosya_adi, strpos($dosya_adi, ".")+1));

	if(in_array($ext, $uzanti) === false){
		echo "Dosya Uzantısı Kabul Edilmiyor";
	}else{
		// Yükleme İşlemi Devam Ettirilir.
	}
?>

<!-- 
	Yukarıdaki Örnekte uzanti Adındaki Değişkene array İle Tanımlanmış Bazı Uzantılar Mevcuttur Ve Kullanıcıya Bu Uzantılı Dosyalar 
	Haricinde Yükleme Yapmasını İstemiyoruz. Bunun İçin dosya_adi Adındaki Değişken İçine Manuel Bir Dosya Adı Belirledik Bu Dosya Adını 
	Bazı Yardımcı Fonksiyonlarla Parçaladık. Parçalama Sonucunda Elde Ettiğimiz Uzantı İle Kısa Bir İf İle array İçerisindeki Uzantılarla 
	Eşleşip Eşleşmediğini Kontrol Ediyoruz.
-->
</body>
</html>