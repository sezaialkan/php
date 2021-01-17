<!DOCTYPE html>
<html>
<head>
	<title>Çoklu Dosya Yükleme</title>
	<meta charset="utf-8">
</head>
<body>
<!-- 
	Çoklu Dosya Yükleme
	Dosya Yükleme Yaparken Bazen Birden Fazla Yükleme Yapmamız Gerekmektedir. Bunun İçin Html in Form Elemanlarındaki multiple Özelliğini Kullanacağız. 
-->

<form method="post" enctype="multipart/form-data">
	<input type="file" name="dName[]" multiple>
	<input type="submit" name="fUpload" value="Dosya Yükle">
</form>

<!-- 
	Yukarıdaki Form un İçindeki file Elemanının name ini array Dizisi Olarak Tanımlıyoruz. Ve file Elemanına multiple Özelliği Ekliyoruz.
-->

<?php 
	if (isset($_POST['fUpload'])) {
		foreach ($_FILES['dName']['name'] as $i => $name) {
			$dir = "file";
			$fileName = $dir."/".$name;
			if (@move_uploaded_file($_FILES['dName']['tmp_name'][$i], $fileName)) {
				echo "Dosya Yüklendi".$i;
			}else{
				echo "Dosya Yükleme Başarısız. Hata Kodu : ". $_FILES['dName']['error'];
			}
		}
	}
?>
<!-- 
	Yukarıdada Form Post Edildiğinde Çalışacak Alan Mevcuttur Burada, Gelen Dosyaları foreach Döngüsü İle Teker Teker Ekleme İşlemini 
	Yaptırıyoruz. foreach İle Gelen Dosyaların indis Numaralarını Alıyoruz, Dosyaların Sunucudaki Geçici Yerlerinde Bulurken Bu İndis Numaralarına 
	Göre Buluyoruz. Dosya Yükleme Ve Çoklu Dosya Yükleme Arasındaki Farkları Görebilmek İçin Buraya Tıklayabilirsin.
-->
</body>
</html>