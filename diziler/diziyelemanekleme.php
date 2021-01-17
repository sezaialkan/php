<!DOCTYPE html>
<html>
<head>
	<title>Diziye Eleman Ekleme</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php ile oluşturduğumuz ve eleman girişi yaptığımız dizilere daha sonrada eleman eklememiz gerekebilir. Diziye eleman eklemek 
	için array_unshift() fonksiyonu ile dizinin başına bir veya daha fazla eleman ekleyebiliriz.
	
	array_unshift(array, var)

	fonksiyonun ilk parametresi olarak ekleme yapacağımız diziyi çağıyoruz. Sonrasında eklemek yapmak istediğimiz elemanları 
	değerleri virgül(,) ile ayırarak eleman atamasını yapıyoruz.	Diğer bir seçenek olarakta dizinin sonuna array_push() 
	fonksiyonu ile ekleme yapıyoruz.

	array_push(array, var);
 
	Bu fonksiyonda bir önceki gibi ilk parametre olarak değer ataması yapılacak diziyi çağırıyoruz. Sonrasında eklemek istediğimiz 
	elemanları değerleri aralarına virgül(,) ile ayırarak eleman atamasını yapıyoruz.

	Dizinin Başına Ekleme Yapma
	İlk olarak bir dizi oluşturalım ve dizinin başına değerler ekleyelim.
*/

$sampleOne = [
	"elementOne",
	"elementTwo",
	"elementThree"
];

array_unshift($sampleOne, "değerBir","değerIki");
echo "<pre>";
print_r($sampleOne);

/* 
	yukarıdaki örnekde sampleOne dizisinin başına iki değer ekelemsi yaptık. Değer sayısı değişiklik gösterebilir bir veya daha 
	fazla ekleme yapılabilir. Daha net anlamak için ekran çıktısına göz atabilirsiniz.

	Ekran Çıktısı :

Array
(
    [0] => değerBir
    [1] => değerIki
    [2] => elementOne
    [3] => elementTwo
    [4] => elementThree
)

	Dizinin Sonuna Ekleme Yapma
	Dizinin sonunada ekleme yaparken yukarıdaki işlemlerin aynısı uyguluyoruz. İlk olarak bir dizi oluşturuyoruz.
*/

$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
];
array_push($sampleTwo, "değerBir","DeğerIki",3);
echo "<pre>";
print_r($sampleTwo);

/* 
	Yukarıdaki örnektede dizinin sonuna üç adet değer ataması yaptık. Değer ataması yaparken integer ifadelerde tırnak işareti 
	kullanmak zorunda değiliz. array_push() ile dizinin sonuna yapacağınız değer eklemesinin sayısı değişkenlik gösterebilir bir veya daha fazla.

	Ekran Çıktısı :

Array
(
    [0] => elementOne
    [1] => elementTwo
    [2] => elementThree
    [3] => değerBir
    [4] => DeğerIki
    [5] => 3
)
*/
?>
</body>
</html>