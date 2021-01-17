<!DOCTYPE html>
<html>
<head>
	<title>Dizileri Birleştime</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php İle oluşturduğumuz ve oluşturulan dizileri tek dizi haline getirmek isteyebiliriz. Dizileri birleştirmek için array_merge() 
	yardımcı fonksiyonunu kullanıyoruz. 

	array_merge(array1);
 
	Fonksiyon parametre olarak sadece birleştirilecek dizileri alıyor. Dizileri belirtirken aralarını virgül(,) ile ayırıyoruz.
*/

$sampleTwo = [
	1,
	2,
	3
];
$sampleTwoo = [
	4,
	5,
	6
];
echo "<pre>";
print_r(array_merge($sampleTwo,$sampleTwoo));

/* 
	Yukarıdaki örnekte iki farklı diziyi array_merge() fonksiyonu ile birleştirdik. fonksiyon içersinde, birleştirmek istediğiniz 
	kadar dizi belirtebilirsiniz. 

	Ekran Çıktısı:

Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
)
*/
?>
</body>
</html>