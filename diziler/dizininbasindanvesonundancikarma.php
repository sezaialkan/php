<!DOCTYPE html>
<html>
<head>
	<title>Dizinin İlk Ve Son Elemanını Silme Çıkarma</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php İle Oluşturduğumuz Dizilerde Bazı Değişken Durumlarda Dizilerde İlk Veya Son Elemanları Silmek Veya Çıkarmak Gerekebilir. 
	Kullanılan FONKSİYONLAR DİZİ İÇERSİNDEN ELEMANLARI SİLMEZ, Eleman Dizi İçersinde Varlığını Sürdürür Fakat Kullandığımız Fonksiyonlar 
	Eleman Yokmuş Gibi Gösterir. Dizinin İlk Elemanını Çıkarmak İçin array_shift() Fonksiyonunu Kullanırız.

	array_shift(array);

	Dizinin Son Elemanını Çıkarmak İçinse array_pop() Fonksiyonunu Kullanırız.

	array_pop(array);
 
	Diziden İlk Elemanı Çıkarma
	Öncelikle Bir Dizi Oluşturalım Ve Dizi İçersinde Elemanları Ekrana Yazdıralım.
*/

$sampleOne = [
	"elementOne",
	"elementTwo",
	"elementThree"
];
array_shift($sampleOne);
echo "<pre>";
print_r($sampleOne);
	
/* 
	Ekran Çıktısı 

Array
(
    [0] => elementTwo
    [1] => elementThree
)

	Yukardada Dediğimiz Gibi "elementOne" Elemanı Dizi İçersinde Varlığını Sürdürmektedir. Fakat Fonksiyonlar 
	İle İşleme Katılmamaktadır Yok Sayılmaktadır.

	Dizin Son Elemanını Çıkarma
	array_pop() Fonksiyonunun Tek Farkı İse Son Elemanı Diziden Çıkarmasıdır Kullanımı Birebir Aynıdır.
*/

$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
];
array_pop($sampleTwo);
echo "<pre>";
print_r($sampleTwo);

/* 
	Ekran Çıktısı

Array
(
    [0] => elementOne
    [1] => elementTwo
)
*/
?>
</body>
</html>