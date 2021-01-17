<!DOCTYPE html>
<html>
<head>
	<title>Dizinin İlk Ve Son Elemanını Alma</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php ile Oluşturğunuz Dizinin Veya Dizilerin İlk Veya Son Elemanlarını Çağırmamız Gerebilir. Çağırmak İstediğimiz 
	Elemanların Anahtar Kelimelerini Bilmeyebiliriz. 
	Dizinin İlk Elemanını Çağırmak İçin current() Fonksiyonunu Kullanıyoruz. Fonksiyon Tek Parametre Almaktadır.

	current(array);

	Dizinin Son Elemanını Çağırmak İçin İse end() Fonksiyonunu Kullanıyoruz. Yine Fonksiyon Tek Parametre Almaktadır.

	end(array);

	Dizinin İlk Elemanını Alma
	Bir Dizi Oluşturalım Ve Dizinin İlk Elemanını Ekrana Yazdıralım.
*/

$sampleOne = [
	"elementOne",
	"elementTwo",
	"elementThree"
];
echo (current($sampleOne));

/* 
	Örneğin Ekran Çıktısı 'elementOne' dır.
	Dizinin Son Elemanını Alma
*/

$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
];
echo (end($sampleTwo));

/* 
	Yukarıdaki Örneğin Ekran Çıktısı 'elementThree' dir. İstersek Örneklerimi Dahada Genişletebiliriz. Bir Dizi Oluşturalım Ve 
	shuffle() Fonksiyonu İle Sayfa Her Yenilendiğinde Dizi Elemanlarının Yerlerini Değiştirelim Ve Her Değişimde İlk Elemanı Ekrana Yazdıralım.
*/

$sampleThree = [
	"elementOne",
	"elementTwo",
	"elementThree"
];
shuffle($sampleThree);
print_r($sampleThree);

/* 
	Dizinin İlk Elemanını Her Çağırışımızda Muhtemelen Farklı Sonuç Verecektir Eleman Sayısı Az Olduğu İçin.
*/
?>
</body>
</html>