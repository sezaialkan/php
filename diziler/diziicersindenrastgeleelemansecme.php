<!DOCTYPE html>
<html>
<head>
	<title>Dizi İçersinden Rasgele Eleman Seçme</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php İle Oluşturulan Dizilerin Elemanlarını Rasgele Sıralama İşlemini shuffle() Fonksiyonu İle Yapıyorduk Ve Buda Bize 
	Diziden Eleman Çağırdığımızdan Rasgele Bir Değer Döndürebiliyordu Ama array_rand() Fonksiyonu İle Dizi İçerisine Herhangi 
	Bir Müdahalede Bulunmadan Ekrana Çıktısını Alabiliriz.

	array_rand(array, int);

	array_rand() Fonksiyonu İki Parametre Almaktadır. İlk Parametre İle Değer Döndürülecek Diziyi Çağırıyoruz, İkinci 
	Parametre İle İse Kaç Tane Rasgele Eleman Seçileceğidir.	
*/
	
$sampleOne = [
	"elementOne",
	"elementTwo",
	"elementThree",
	"elementFour"
];
$dizi = array_rand($sampleOne, 3);
echo $sampleOne[$dizi[0]];
echo $sampleOne[$dizi[1]];
echo $sampleOne[$dizi[2]];

/*
	Yukarıdaki Örnekte sampleOne Dizisinden 3 Tane Rasgele Değer Alıyoruz. Bu Değerleri Ekrana Yazdırmamız İçin İndis Numaralarını Kullanıyoruz.	
*/
?>
</body>
</html>