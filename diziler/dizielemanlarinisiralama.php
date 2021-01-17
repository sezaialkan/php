<!DOCTYPE html>
<html>
<head>
	<title>Dizi Elemanları Sıralama</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/*
	Php İle Dizi Elemanlarını Belirlerken Sıralamasını Biz Kendimiz Belirleyebiliriz Fakat Diziye Veri Tabanından Veya Bir Formdan Vs. 
	Gelen Elemanlar Belli Bir Düzen Veya Sırada Olmayabilir. Bu Nedenle Dizi Elemanları Belli Bir Düzene Sıraya Koymak İçin Belli Başlı 
	Yardımcı Fonksiyonlar Vardır.

	Dizi Elemanlarını Tersten Sıralama
	Dizi Elemanlarını Anahtar Değerleri Dahil Olmadan Tersten Sıralama İşlemi İçin array_reverse() Fonksiyonunu Kullanıyoruz.
*/

$sampleOne = [
	"elementOne",
	"elementTwo",
	"elementThree"
]; 
echo "<pre>";
print_r(array_reverse($sampleOne));

/* 
	Yukarıdaki Örnekte print_r() İle Diziyi Yazdırdığımızda Elemanların Tersten Ekrana Yazdırdığını Göreceksiniz. Dizi Üzerinde Herhangi 
	Bir Etkisi Yoktur. Sıralamayı Veya Anahtar Kelimeler ÜZerinde Değişiklik Uygulamaz.

	Ekran Çıktısı:

Array
(
    [0] => elementThree
    [1] => elementTwo
    [2] => elementOne
)

	Dizi Elemanlarını A-Z Sıralaması
	Dizi Elemanlarını A-Z ye Sıralama İşlemi İçin asort() Yardımcı Fonkisiyonunu Kullanıyoruz. Bu Sıralamada Anahtar Değerlerleride 
	Dahil Olmaktadır.
*/

$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
]; 

asort($sampleTwo);
echo "<pre>";
print_r($sampleTwo);

/* 
	Yukarıdaki Örnekte Dizimizi Ekrana Yazdırdığımızda Elementleri Alfabetik Sıralamaya Göre A-Z Ye Doğru Sıralamıştır. Bu Sıralamada
	Anahtar Kelimeler Üzerinde de Değişiklik Uygulanır.

	Ekran Çıktısı:

Array
(
    [0] => elementOne
    [2] => elementThree
    [1] => elementTwo
)

	Dizi Elemanlarını Anahtar Değerleri İle Tersten Sıralama
	Dizi Elemanlarını Tersten Sıralamayı Üst Tarafta array_reverse() Fonksiyonu İle Görmüştük Şuan Kullanacağımız Fonksiyon arsort() 
	Yine Diziyi Tersten Sıralama İşlemine Yarıyor Fakat Bu Sefer Anahtar Değerlerde Dahil Olmak Kaydıyla.
*/

$sampleThree = [
	"elementOne",
	"elementTwo",
	"elementThree"
]; 

arsort($sampleThree);
echo "<pre>";
print_r($sampleThree);

/* 
	Yukarıdaki Örnekte Dizi Elemanlarını Tersine Sıralama Yaparken Anahtar Kelimelerle Bağlantısını Sabit Tutuyor.

	Ekran Çıktısı:

Array
(
    [1] => elementTwo
    [2] => elementThree
    [0] => elementOne
)

	Diziyi Anahtar Değerilerine Göre A-Z Sıralaması
	Yukarıdaki Örneklerde Elemanların Dizilimini Görmüştük Burada İse Elemanların Anahtar Kelimelerine Göre A-Z Sıralaması Olacaktır. 
	Bu Sıralama İçin ksort() Fonksiyonunu Kullanacağız.
*/

$sampleFour = [
	"meyve"	=>	"elementOne",
	"sebze"	=>	"elementTwo",
	"limon"	=>	"elementThree"
]; 

ksort($sampleFour);
echo "<pre>";
print_r($sampleFour);

/* 
	Yukarıki Örnekte Anahtar Kelimeler Elle Girişmiş Ve Sıralama A-Z ye Olacak Şekilde Ekrana Basılmıştır Fakat Harf Yerine Rakam 
	Kullansaydık Bu Seferde 1-9 Sıralaması Yapacaktı. Bu Sırama Olurken Anahtar Değerler İle Elemanlar Sabittir Değişmez.

	Ekran Çıktısı:

Array
(
    [limon] => elementThree
    [meyve] => elementOne
    [sebze] => elementTwo
)

	Diziyi Anahtar Değerilerine Göre Tersten Sıralanması
	Son Olarak Anahtar Değerlere Göre Z-A Sıralaması Bu Sıralamada Anahtar Değer İle Eleman İLişkisi Korunur. Tersten Sıralama İçin 
	krsort() Yardımcı Fonksiyonu Kullanılır.
*/
$sampleFive = [
	"elementOne",
	"elementTwo",
	"elementThree"
]; 

krsort($sampleFive);
echo "<pre>";
print_r($sampleFive);

/* 
	Yukarıdaki Örnekğ,n Ekran Çıktısında Elemanların Anahtar Değerleri İle Tersten Sıralandığını Göreceksiniz.

	Ekran Çıktısı:

Array
(
    [2] => elementThree
    [1] => elementTwo
    [0] => elementOne
)
*/
?>
</body>
</html>