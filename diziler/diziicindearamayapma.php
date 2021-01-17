<!DOCTYPE html>
<html>
<head>
	<title>Dizi İçerisinde Arama Yapma</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php İle Oluşturduğumuz Dizilerin İçerisinde Arama Yapmak İçin 2 Farkı Fonksiyon Kullanabiliriz. İlk Fonksiyonumuz 
	array_search() Fonksiyonudur. Bu Fonksiyon Dizi İçersinde Aranan Eleman Varsa Elemanın Anahtar Değerini Döndürür. 
	Büyük Küçük Harf Duyarlılığı Vardır. İki Parametre Alır, İlk Parametresi Aranacak Değer, İkinci Parametresi İse Arama 
	Yapılacak Dizidir. Dilimizdede Buna Samanlıkta İğne Aramakta Denebilir.

	array_search(needle, haystack);
 
	İkinci Seçenek Olarak İse in_array() Fonksiyonudur. Kullanımı Tamamiyle array_search() Fonksiyonu İle Aynıdır. Eğer 
	Dizi İçersinde Aranan Değer Varsa Bize Değeri Değil 1(true) Değerini Döndürür.

	in_array(needle, haystack);

	ARRAY_SEARCH()

	İlk Olarak array_search() Fonksiyonu İle Basit Bir Arama Yapalım
*/

$haystack = [
	"php",
	"jquery",
	"javascript",
	"html",
	"css"
];
echo array_search("html", $haystack);

/* 
	Yukarıdaki Örnekte Manuel Olarak Dizi İçersinde html Elemanını Aratacaktır. Eğer Elemanı Bulursa Anahtar Değerini 
	Döndürecektir. Aşağıda Biraz Daha Gelişmiş Bir Örnek Yapalım Kullanıcıdan Gelen Değere Göre Arama Yaptıralım.
*/
?>

<form method="post">
	<input type="text" name="needle">
	<input type="submit" name="search" value="Ara">
</form>

<?php 
$haystack = [
	"php",
	"jquery",
	"javascript",
	"html",
	"css"
];
if(isset($_POST['search'])){
	$search = array_search($_POST['needle'], $haystack);
	echo $haystack[$search];
}

/* 
	Yukarıda Form dan Gelen Bilgiye Göre Dizi İçersinde Arama Yaptırdık. Eğer Aranan Eleman Dizide Mevcutsa Dönen Anahtar 
	Değer İle Dizi İçersinden Elemanı Çekiyoruz.

	IN_ARRAY()

	in_array() İle Dizi İçersinde Bir Değer Aratalım, Dönen Sonucu Görede if İle Kullanıcıya Bilgi Verelim. 
*/

$haystack = [
	"php",
	"jquery",
	"javascript",
	"html",
	"css"
];
if(in_array("html", $haystack)){
	echo "Aranan Değer Dizi İçersinde Mevcuttur.";
}else{
	echo "Aranan Değer Dizi İçersinde Bulunamadı.";
}

/*
	Yukarıdaki Örneğe Göre Eğer html Değeri Dizi İçersinde Varsa Ekrana Aranan Değer Dizi İçersinde Mevcuttur. Diye 
	Yazdıracaktır. Eğer Arana Değer Yoksa Aranan Değer Dizi İçersinde Bulunamadı. Diye Ekrana Yazdıracaktır.
*/
?>
</body>
</html>