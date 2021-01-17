<!DOCTYPE html>
<html>
<head>
	<title>Dosya Silme İşlemi</title>
	<meta charset="utf-8">
</head>
<body>
<!-- 
	Dosya Silme İşlemi
	Php İle Dosya Yüklemenin Yanında Sunucunuzdaki Gereksiz Dosyalarıda Silmek Yok Etmek Gerekir. Örnek Vermek Gerekirse Bir Blog Siteniz 
	Olduğunu Düşünelim Ve Bir Yazınızdaki Görseli Değiştirniz Eski Görseli Sunucunuzda Saklamanın Gereksiz Olduğu Kanaatindeyim. Böyle Durumlarda 
	unlink() Fonksiyonu İle Dosyayı Silebiliriz.
-->

<?php 
	$del = @unlink("image.jpg");
	if($del){
		echo "Silme İşlemi Başarılı";
	}else{
		echo "Dosya Bulunamadı";
	}
?>

<!-- 	
	Yukarıdaki Örnekte unlink() Fonksiyonu İle image.jpg Adındaki Görseli Silme İşlemi Yapıyoruz. İsterseniz Direk unlink() İle Silme 
	İşlemi Gerçekleştirebilirsiniz Veya Silme İşlemini Kontol Etmek İsterseniz Kısa Bir İf İle Silme İşlemi Yapılırsa unlink() Bize True(1) 
	Değerini Döndürecektir. Eğer Silme İşlemi Gerçekleşmiyorsa Dosya Bulunamıyordur.
-->
</body>
</html>