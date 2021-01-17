<!DOCTYPE html>
<html>
<head>
	<title>Dizi Elemanlarını Çarpma</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php oluşturduğumuz dizi içersindeki değerleri Çarpmak için array_product() fonksiyonunu kullanıyoruz.

	array_product(array);

	Fonksiyon tek parametre almaktadır. elemanların Çarpmını almak istediğiniz diziyi fonksiyon içersinde belirtmeniz yeterlidir.
*/

$sampleOne = [
	5,
	21,
	56
];
echo array_product($sampleOne);

/* 
	Yukarıdaki örneğin ekran çıktısı 5880 olacaktır. dizimizin tamamı sayısal ifadelerden oluşmaktadır. Birde String ifadeler 
	barındıran dizi ile Çarpma işlemi yapalım. 
*/

$sampleTwo = [
	"FenerBahçe",
	1907,
	"GalataSaray",
	1905,
	"BeşikTaş",
	"1903"
];
echo array_product($sampleTwo);

/* 
	Yukarıdaki örneğin ekran çıktısı 0' dir. çarpma işlemi için dizinizin sadece sayısal değerler barındırıyor olması gerekmektedir.
*/
?>
</body>
</html>