<!DOCTYPE html>
<html>
<head>
	<title>Dizi Oluşturma</title>
	<meta charset="utf-8">
</head>
<body>
<?php

/* 		
	Dizi Array Nedir ?
	Diziler İçin, Değişken Tanımlamasının Daha Gelişmiş Hali Diyebiliriz. Değişkende Bir Değer Ataması Yapabiliyorken Dizilerde Birden 
	Fazla Değer Atması Yapabiliriz. Her Atadığımız Değere Özel Anahtar Kelimeler Verebiliriz. Çok Boyutlu Yani Dizi İçersinde Dizi Oluşturabiliriz. 
	Bu Hem Yapımızı Daha Dinamik Hale Getirecektir Hemde Okunabilirliği Arttıracaktır.

	Dizi Nasıl Oluşturulur? 
*/

$sampleOne = array(
	"elementOne",
	"elementTwo",
	"elementThree"
);

/* 
	Dizi Tanımlaması En Sade Haliyle Yukarıdaki Gibidir Fakat php nin 5.4 Ve Sonraki Sürümlerinde Bu Kullanımına Güncelleme Gelmiştir.
*/	

$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
];

/* 
	Güncelleme Sonrası Dizi Tanımlamalarını Yukarıdaki Gibi Sadece Köşeli Parantezlerlede Belirtebiliyoruz. Bu Kullanımla Bir Önceki Kullanım 
	Aynıdır. Dizi İçersindeki Değerleri İstediğimiz Kadar Çoğaltabiliriz. String İfadeleri Tırnak("") İşareti İçersinde Belirtiyoruz.
			
	Dizi Ekrana Yazdırma

	Dizileri Ekrana Yazdırırken, Değişkeninin Adı Ve Yazdıracağımız Anahtar Değeri İle Dizi İçersinden Veri Çekebiliriz.Peki Anahtar 
	Değerini Nasıl Görebiliriz Derseniz. print_r() Fonksiyonu İle Dizinin İçersindeki Tüm Değerleri Anahtar Değeri İle Yazdırabiliriz.
*/	
	
$sampleTwo = [
	"elementOne",
	"elementTwo",
	"elementThree"
];

echo "<pre>";
print_r($sampleTwo);

/* 	
	Daha Önce Oluşturduğumuz Dizimizi Ekrana Yazdırdık. Yazdırma İşlemini Yaparken html in <pre> Etiki İle Ekran Çıktısının Dahada Anlaşılabilir 
	Halde Ekrana Yazdırılmasını Sağladık.	
			
Array
(
	[0] => elementOne
	[1] => elementTwo
	[2] => elementThree
)
			 
	Ekran Çıktımız Yukarıdaki Gibi Bizim Her Oluşturduğumuz Değere Otomatik Olarak Bir Anahtar Değeri Atıyor. İstersek Bu Anahtar Değerini 
	Bizde Belirleyebiliyoruz.
*/	

echo $sampleTwo[1];

/* 
	Yukarıki Satırda Bu Anahtar Değerlerini Kullanarak, Dizi İçerisinden Anahtar Değerin Karşılığını Ekrana Yazdırabiliryoruz.

	Anahtar Değeri Belirterek Dizi Oluşturma

	Yukarıdada Bahsettiğim Gibi Dizi İçersine Atadığımız Değerlere Otomatik Anahtar Değerleri Dışında Bizde Değerler Belirleyebiliyoruz.
*/	

$sampleThree = [
	"ad"	=>	"Ahmet",
	"soyad"	=>	"ALKAN",
	"yas"	=>	28
];

echo "<pre>";
print_r($sampleThree);

/* 
	Yukarı Oluşturduğumuz Dizide, Değerlere Kendi Belirlediğimiz Anahtar Değerleri İle Kullanımı Sağlayabiliyoruz. Örneğin Çıktısı
*/
/*	
Array
(
	[ad] => Ahmet
	[soyad] => ALKAN
	[yas] => 28
)
 
	Oluşturduğumuz Dizide Ekrana Yazdıracağımız Değeri, Belirlediğimiz Anahtar Değerleri İle Yazdırma İşlemini Gerçekleştiriyoruz.
*/	

echo $sampleThree["soyad"];	

/* 	
	Çok Boyutlu Dizi Oluşturma

	Son Olarak Çok Boyutlu Diziler İle Oluşturduğumuz Dizi İçersinde, Değer Olarak Biz Dizi Daha Oluşturabiliyoruz.
*/	
			
$sampleFour = [
	"acer"		=>	["Laptop","Projeksiyon"],
	"casper"	=>	["Masaüstü","Laptop","Excalibur"],
	"apple"		=>	["masaustu"=>"MacBook","phone" => "İphone","clock" =>"Watch"]
];

echo "<pre>";
print_r($sampleFour);

/* 
	Yukarıdaki Örnekte İç İçe Oluşturduğumuz Dizilerle İstersek Yine Anahtar Değerlerini Kendimiz Belirliyoruz.
	
Array
(
	[acer] => Array
	(
		[0] => Laptop
		[1] => Projeksiyon
	)
	[casper] => Array
	(
		[0] => Masaüstü
		[1] => Laptop
		[2] => Excalibur
	)
	[apple] => Array
	(
		[masaustu] => MacBook
		[phone] => İphone
		[clock] => Watch
	)
)

	Diziyi print_r() Fonksiyonu İle Ekrana Yazdırdığımızda Ekran Çıktısı Yukarıdaki Gibi Olaracaktır. Örnek Olarak apple Dizisinin 
	İçersindeki masaustunu Yazdırmamız İçin Değişken Bir Ek Parametre Alırken Bu Sefer İki Parametre Alarak Yazdırma Sağlayabiliriz.
*/	

echo $sampleFour["apple"]["masaustu"];

/* 
	Son Olarak İç İçe Dizi Kullanımında Hatalı Kullanım Olarak Eğer Biz echo İle Sadece apple Yazdırmaya Çalışırsak, apple Değeride 
	Biz Dizi Olduğu İçin Ekrana Array Çıktısı Verecektir.
*/	

echo $sampleFour["apple"];

/* 
	Yukarıdaki Kullanımda Dizi İçersinden Değer Ulaşımı Sağlanmayacaktır.
*/	
?>
</body>
</html>