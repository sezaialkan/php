<!DOCTYPE html>
<html>
<head>
	<title>Hata Yönetimi / try - catch Kullanımı</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

/* 
	Php ile hata Yönetimi istisna oluşturulacak durumlarda kullanılır. Bunlar nasıl istisnalar derseniz; Veritabanı Bağlantısı, 
	$_FILES küresel değişkeni ile dosya boyut kontrolü gibi vs. oluşabilecek istinai hata durumlarında ekrana hataları yazdırabiliriyoruz.

	try 	= 	Dene
	throw	=	Atmak
	catch 	=	Yakalamak
	finally	=	En Sonunda

	try catch yapısında kullandığımız deyimlerin türkçe anları yukarıdaki gibidir. try içersinde yapılan işlemde bizim belirlediğimiz 
	istisna durumunda throw deyimi ile catch içersine hata gönderilir, catch içersinde hata ekrana yazdırılır. finally deyimi ile istisnai durum olsun veya olmasın en sonunda çalışmasını istideğimiz kodların bulunduğu yer. 	

*/

try {
	//Yapılacak İşlem
} catch (Exception $e) {
	//Hata Durumunda Çalışacak Kodlar	
}

/* 
	En sık karşılaştığımız try catch yapısı yukarıdaki gibidir. fakat yukarıda belirttiğimiz gibi finally deyimi ilede kullanımı mevcuttur.
*/

try {
	//Yapılacak İşlem
} catch (Exception $e) {
	//Hata Durumunda Çalışacak Kodlar
}finally{
	//Tüm İşlemlerden Sonra Çalışacak Alan
}

/* 
	try - catch Kullanımı

	Öncelikle bir örnek yapalım bu örnekte bir değişken oluşturalım, dosya yüklemi sırasında dosya boyutu kontrolü yapaılım eğer dosya 
	1MB dan yüksekse Kullanıcıya Bilgi Versin.
*/

try {
	$dosyaBoyut = 2048576;

	if (1048576 < $dosyaBoyut) {
		throw new Exception("Dosya Boyutu 1MB Den Fazla Olamaz.");
	}else{
		echo "Dosya Yükleme Başarılı";
	}
} catch (Exception $e) {
	echo $e;
	echo $e->getMessage();
}

/* 
	Yukarıdaki örnekte eğer dosya 1Mb dan büyük ise throw ile yeni hata üretip, hatayı catch içersinde $e değişkenine aktaracaktır. 
	Örnekte catch içersinde oluşan hatayı direk yazdırdık. Direk yazdığımızda

	$e Ekran Çıktısı:

	Exception: Dosya Boyutu 1MB Den Fazla Olamaz. in C:\wamp64\www\kod\php\hatayonetimi\one.php:48 Stack trace: #0 {main}

	Yukarıdaki satırdaki bir çıktı verecektir. Eğer hatayı getMessage() ile yadırırsanız ekrana direk hata oluşumunda, oluşturduğunuz değer gelecektir.

	$e->getMessage() Ekran Çıktısı 

	Dosya Boyutu 1MB Den Fazla Olamaz.

*/

?>
</body>
</html>