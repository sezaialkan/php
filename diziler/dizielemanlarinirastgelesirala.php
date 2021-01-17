<!DOCTYPE html>
<html>
<head>
	<title>Dizi Elemanlarını Rasgele Sıralama</title>
	<meta charset="utf-8">
</head>
<body>
<?php
/* 
	Php İle Oluşturduğumuz Dizilerde, Dizi Elemanlarını Kendimiz Belirliyorsak Sıralamasını Belirleyebiliriz Veya 
	Yardımcı Fonksiyonlarla Bu Sıralamayı A dan Z ye Veya Z den A ya Gibi Düzenleyebiliriz. Birde shuffle() Fonksiyonu 
	İle Sayfayı Her Yenilediğimizde Dizi Elemanlarını Rasgele Sıralayabiliriz.
	
	shuffle(array);
 
	Fonksiyonun Kullanımı Yukarıdaki Gibidir. Kullanılacak Diziyi Fonksiyon İçersinde Çağırmak Yeterli Olacaktır. Dizi 
	İçersinde Elemanlarınız Ne Kadar Çok Olursa Eleman Dizilimi Bir Okadar Farklı Olcaktır. Bir Dizi Oluşturalım Ve Diziyi 
	shuffle() Fonksiyonu İle Karıştıralım Ve İlk Değeri Ekrana Yazdıralım.
*/

$sampleOne = [
	"1",
	"2",
	"3",
	"4",
	"5"
];
shuffle($sampleOne);
echo current($sampleOne);

/* 
	current() Fonksiyonu Dizinin İlk Elemanını Alır.
*/ 
?>
</body>
</html>