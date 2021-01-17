<!DOCTYPE html>
<html>
<head>
	<title>Dizide Tekrarlanan Değerleri Bulma Ve Silme</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php İle Oluşturduğumuz Dizilerde, Aynı Eleman Kendini Bir Çok Kez Tekrar Edebilir. Kendini Yenilen Elemanların 
	İstersek Sayısını Alabilir İstersekde Dizi İçersinden Silebiliriz. Elemanların Sayısını Bulmak İçin array_count_values() 
	Fonksiyonu İle Eleman Kendini Kaç Kere Tekrar Etmiş Bunu Bulabiliriz.
	
	array_count_values(input);

	Kendini Tekrar Eden Elemanları Silmek İçinse array_unique() Fonksiyonunu Kullanabiliriz.

	array_unique(array);
	
	Eleman Sayısını Bulma
	Öncelikle Bir Dizi Oluşturalım Ve İçerisine Kendine Bolca Tekrar Eden Elemanlar Girelim.
*/

$sampleOne = [
	"php",
	"bootstrap",
	"css",
	"php",
	"css",
	"html",
	"php",
	"array"
];
echo "";
print_r(array_count_values($sampleOne));

/* 
	Dizimizi Oluşturduktan Sonra array_count_values() Fonksiyonu İle Saydırma İşşlemimi Yapacağız Fakat Bize Dönen 
	Sonuç Yine Dizi Halinde Olacağı İçin print_r İle Ekrana Yazdırıyoruz.

	Ekran Çıktısı:

Array
(
    [php] => 3
    [bootstrap] => 1
    [css] => 2
    [html] => 1
    [array] => 1
)
 
	Yukarıda Ekran Çıktısında Gözüktüğü Gibi Hangi Elemanın Ne Kaç Kere Kendini Tekrar Ettiği Gözüküyor. Eğer Tek Bir 
	Elemanı Öğrenmek İstiyorsak, Elemanımızın İsmini Anahtar Değeri Olarak Girerek Sonucu Görebiliriz.
*/

echo array_count_values($sampleOne)["php"];

/* 
	Eleman Silme
	Eleman Silme İşlemini Yukarıdada Belirttiğim Gibi array_unique() Fonksiyonu İle Yapıyoruz. Yine Bir Dizi Oluşturalım.
*/

$sampleTwo = [
	"php",
	"bootstrap",
	"css",
	"php",
	"css",
	"html",
	"php",
	"array"
];
echo "";
print_r(array_unique($sampleTwo));

/* 
	array_unique() Fonksiyonun Sonucu Dizinin Kendini Tekrar Eden Elemanlardan Kurtulmuş Halidir. Yukardaki Örneğin 
	Ekran Çıktısı Aşağıdaki Gibidir.

	Ekran Çıktısı:
Array
(
    [0] => php
    [1] => bootstrap
    [2] => css
    [5] => html
    [7] => array
)

	Fonksiyon Kendini Tekrar Eden Elemanları Silerken Anahtar Değerleri İle Birlikte Silme İşlemini Uyguluyor. Bu Nedenle 
	Anahtar Değerlerde Sıralı Olanlarda Atlamalar Yaşanabilir.
*/
?>
</body>
</html>