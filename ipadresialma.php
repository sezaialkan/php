<!DOCTYPE html>
<html>
<head>
	<title>İp Adresi Alma</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
/* 
	Php İle Kullanıcılarınızın İp Adres Değerlerini Alabilirisiniz. İp Adresini Elde Etmek İçin $_SERVER[] Küresel Değişkeni Kullanılır. 
	Elde Ettiğiniz Değerle İsterseniz Kullanıcılarınıza İp Engellemesi Gibi Çalışmalar Yapabilirsiniz.
*/

$_SERVER['REMOTE_ADDR'];

/* 
	Küresel Değişkenden REMOTE_ADDR Anahtar Değeri Bize Kullanıcının İp Değerini Verir. 
*/

echo $_SERVER['REMOTE_ADDR'];

/* 
	Ekrana Yazdırma İşlemi İçin echo Kullanmak Yeterli Olacaktır. Bilgisayarınızda Çalıştırdığınızda ::1 Değerini Alırsınız.
*/
?>
</body>
</html>