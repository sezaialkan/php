<!DOCTYPE html>
<html>
<head>
	<title>implode İle Dizi Elemanlarını Birleştirme</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	implode İle Dizi Elemanlarını Birleştirme
	Php İle Bir Dizi İçersindeki Elemanları Sırasıyla Bir Değişkene Atayabilir Veya Ekrana Yazdırabilir.Bir Dizi Oluşturalım Ve 
	Bu Dizi İçersindeki Elemanları Bir Değişkene Sırasıyla Değer Olarak Atayalım.
*/

$sampleOne = [
	"Ne",
	"Mutlu",
	"TÜRKÜM",
	"Diyene"
];

/* 
	Yukarıda Oluşturduğumuz Diziyi implode() Fonksiyonu İle Dizi Elemanlarının Aralarında Birer Boşluk Bırakarak Değişken İçersinde 
	Değer Ataması Olarak Yazacağız.	
*/

$sampleOne = [
	"Ne",
	"Mutlu",
	"TÜRKÜM",
	"Diyene"
];
$varlik = implode(" ", $sampleOne);
echo $varlik;

/* 
	Yukarıdi Ekran Çıktısı Ne Mutlu TÜRKÜM Diyene Olacaktır. İstersek Direk Yazdırabiliriz Veya Bir Değişkene Atayabiliriz. implode() 
	Fonksiyonu İle İlk Parametre İle Elemanların Aralarına Gelecek Birleştirici Karakteri Belirtiyoruz Ben Boşluk Kullandım Siz İsterseniz 
	Nokta(.), Virgül(,) Vs. Kullanabilirsiniz.
*/
?>
</body>
</html>