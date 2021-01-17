<!DOCTYPE html>
<html>
<head>
	<title>Dosya Boyut Kontrolü</title>
	<meta charset="utf-8">
</head>
<body>
<!-- 
	Php İle Dosya Boyut Kontrolü
	
	Php de Dosya Yüklemi İşlemi Yaparken Eğer Boyut Kontrolü Yapmazsak Yüklenen Dosyalar Sıkıştırılmamış Veya Çok Büyük Boyutlu Olup Hem 
	Sunucumuzda Fazla Yer Kaplamış Olacaktır Hemde Yüklenecek Dosyanın Bir Görsel Olduğunu Düşünelim Ve Bu Görsel Sayfada Kullanıcıya 
	Gösterilecek Bir Görsel Olacaksa Site Hızınızıda Etkileyecektir. Yükleme Yaparken Dosya Boyut Kontrolü İle Bunun Önüne Geçebilirsiniz.	
-->

<?php 
	if ($_FILES['name']['size'] < 1048576) {
		//Eğer Dosya 1M Dan Küçükse Çalışacak Alan
	}else{
		echo "Dosya Boyutu 1 Mb Den Büyük";
	}
?>

<!-- 
	Yukarıdaki Örnekte $_FILES Küresel Değişkenin size indis i İle Yüklenecek Olan Dosyanın Boyutunu megabayt Cinsinden Alabiliriz Ve Aldığımız Bu Bilgiyi if Sorgusu İçersinde 1M dan Büyük İse Dosya Yükleme Yapma Gibi İşlemler Yaptırabilir. Kullanıcıya Bİlgi Verebiliriz. Dosya Yükleme İşlemi Deyatını Görmek İçin Buraya Tıklayabilirsiniz.
-->
</body>
</html>