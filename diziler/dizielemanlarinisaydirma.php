<!DOCTYPE html>
<html>
<head>
	<title>Dizi Elemanlarını Saydırma</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

/* 
	Php İle Dizi Oluşturma Projelerimizde Önemi Çok Yüksek Bir Oluşumdur. Kendi Oluşturduğumuz Dizi İçersindeki Eleman Sayılarını Bilebiliriz 
	Peki Dizi İçersine Veri Tabanından Veya Kullanıcıdan Gelen Bilgilere Göre Dolduruyorsak Bunu Nasıl Öğreneceğiz?
	Dizilerdeki Eleman Sayılarını count() Fonksiyonu İle Öğrenebiliyoruz. 
*/

$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
];

echo count($sampleTwo);

/* 
	Yukarıdaki Örneğin Ekran Çıktısı 3 Olacaktır.
	Fonksiyon Genelde Tek Parametre İle Kullanımı Mevcuttur. Fakat İç İçe Dizi ler Oluşturduğumuz Zaman, Dizi İçersindeki Tüm 
	Elemanlarını Sayısını Almak İçin İkinci Parametre Olarak 1 Girebiliriz.
*/

$sampleFour = [
	"acer"		=>	["Laptop","Projeksiyon"],
	"casper"	=>	["Masaüstü","Laptop","Excalibur"],
	"apple"		=>	["masaustu"=>"MacBook","phone" => "İphone","clock" =>"Watch"]
];

echo count($sampleFour);

/* 
	Yukarıdaki Ekran Çıktısı 3 Dür Fakat Tüm Elemanları Saydırmak İstiyorsak İkinci Parametre Olarak 1 Elemanını Girebiliriz.
*/

echo count($sampleFour, 1);

/* 
	Ekran Çıktısı 11 Dir. İç İçe Oluşturulan Tüm Dizi Elemanlarını Saydırma İşlemine Dahil Edecektir.
*/
?>
</body>
</html>