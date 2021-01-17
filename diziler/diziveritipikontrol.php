<!DOCTYPE html>
<html>
<head>
	<title>Dizi Veri Tipi Kontrol</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Dizi Veri Tipi Kontrol
	Php İle Dizi İşlemleri Her Zaman Diziyi Oluşturup Sonra Çağırmayla Bitmiyor. Elimizde Bir Değişken Olsun Ve Bu Değişkenin İçeriğinin 
	Dizi Olup Olmadığınız Kontrol Edelim.
*/

$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
];
echo is_array($sampleTwo);

/* 			
	is_array() İle Değişkenin Dizi Olup Olmadığını Kontrol Ettik Eğer Değişken İçeriği Dizi İse Ekrana 1 Değerini Döndürecektir.
	Bir Örnek Daha Yapalım
*/	

if(is_array($sampleTwo)){
	echo "Değişken Bir Dizidir";
}else{
	echo "Değişken Dizi Değildir.";
}

/* 
	Yukarıdaki Örnekte Eğer Değişken Dizi İse is_array() True Değerini Döndürecektir Ve Ekrana Değişken Bir Dizidir Yazdıracaktır.
*/	
?>
</body>
</html>