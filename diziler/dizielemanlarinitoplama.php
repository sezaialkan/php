<!DOCTYPE html>
<html>
<head>
	<title>Dizi Elemanlarını Toplama</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php oluşturduğumuz dizi içersindeki değerleri toplamak için array_sum() fonksiyonunu kullanıyoruz. Fonksiyon ile dizi içersindeki elemanların toplamını almak, dizinin sadece sayısal ifadelerden oluşmak zorunda değildir.

	array_sum(array);

	Fonksiyon tek parametre almaktadır. elemanların toplamını almak istediğiniz diziyi fonksiyon içersinde belirtmeniz yeterlidir.
*/

$sampleOne = [
	5,
	21,
	56
];
echo array_sum($sampleOne);

/* 
	Yukarıdaki örneğin ekran çıktısı 82 olacaktır. dizimizin tamamı sayısal ifadelerden oluşmaktadır. Birde String ifadeler barındıran 
	dizi ile toplama işlemi yapalım. 
*/

$sampleTwo = [
	"FenerBahçe",
	1907,
	"GalataSaray",
	1905,
	"BeşikTaş 1903",
	"1903"
];
echo array_sum($sampleTwo);

/* 
	Yukarıdaki örneğin ekran çıktısı 5715' dir. sayısal değerleri tırnak içersinde yazmamız sonucu değiştirmeyecektir. 1903 değerinide 
	toplama işlemine dahil edecektir. Fakat "BeşikTaş 1903" şeklinde bir ifade kullanmış olsaydık, değeri toplama işlemine dahil etmeyeceti.
*/
?>
</body>
</html>