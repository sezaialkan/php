<!DOCTYPE html>
<html>
<head>
	<title>explode İle Parçalama</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	explode İle Parçalama
	Php İle String İfadeleri explode() Fonksiyonu İle Parçalayarak Dizi Haline Getirebiliriz. İfadeyi Parçalama İşlemi İçin 
	explode() Fonksiyonu İki Parametre Almaktadır. İlk Parametresi, Parçalayacağımız String İfadenin İçersinde Kullanacağımız Ayraç, 
	İkinci Parametre İse Parçalama İşlemi Uylanacak Olan String İfade.
*/

explode(delimiter, string);

/*
	İlk Olarak Bir Değişken Oluşturalım Ve Bu Değişkene Bir Değer Ataması Yapalım. 
*/

$varlik = "Ne Mutlu TÜRKÜM Diyene!";

/* 
	Yukarıdaki String İfade Ayaraç Olarak Kullanabileceğimiz Karakter Boşluktur.Tabi Bu Karakter Her String İfadede Değişiklik Gösterebilir.
*/

$varlik = "Ne Mutlu TÜRKÜM Diyene!";
$parca = explode(" ", $varlik);

/* 
	Yukarıdaki Örnekte İfademizi Parçaladık Artık $parca Değişkeni Bir Dizi Yapısına Sahiptir. Oluşturduğumuz Diziyi print_r() İle Ekrana Yazdıralım.
*/
echo "<pre>";
print_r($parca);

/* 
	Ekran Çıktsı:

Array
(
    [0] => Ne
    [1] => Mutlu
    [2] => TÜRKÜM
    [3] => Diyene!
)

	Artık Dizi Elemanlarımızı Anahtar Kelimeleriyle Çağırıp Ekrana Yazdırabiliriz.

*/

echo $parca[2];
?>
</body>
</html>