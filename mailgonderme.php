<!DOCTYPE html>
<html>
<head>
	<title>Mail Gönderme</title>
	<meta charset="utf-8">
</head>
<body>
<!--
	Php İle Mail Gönderimi İçin İki Bağlantı Türü Vardır. Bunlardan Biri TLS Bağlantı Diğeri İse Sertifikalı Siteler 
	İçin SSL Bağlantısını Kullanarak Mail Gönderimi Sağlayabiliriz. Bunun Yanında Projemize Eklememiz Gereken 3 Adet Dosya 
	Vardır Bunların 3 ünü Aynı Konumda Tutmamız Gerekmektedir Birini İse Projemize Dahil Etmemiz Gerekmektedir. Dahil Edeğimiz 
	Dosya class.phpmailer.php Dosyasıdır Dosyayı Dahil Etmezsek Gönderim İşlemi Sağlanmayacaktır. 

	Sıra Geldi Bağlantı Kurmaya Bunun İçin Mail Sunucusunun Adresi Veya IP si, STMP Mail Adresiniz Ve Şifresidir. Ve Bilinmesi 
	Gereken Bağlantı Türünüz.

	Html İle Bir Form Oluşturalım.
-->
			
<form method="post">
	<input type="mail" name="mail" placeholder="Alıcı Mail">
	<input type="text" name="subject" placeholder="Mail Konusu">
	<textarea name="detail" placeholder="Mail İçeriği"></textarea>
	<input type="submit" name="mailSend">
</form>

<!-- 	
	Yukarıda Oluşturduğumuz Formda Kullanıcından 3 Ayrı Bilgi İle İstenilen Mail Adresine Bilgi Gönderimi Gerçekleştireceğiz. Bunlar Alıcı
	Mail, Mail Konusu Ve Mail Detayı. Bundan Sonraki İşlem Form Post Edildiğinde Php Kodlarımızın Çalışmasıdır.
-->

<?php
require_once 'class.phpmailer.php';
if(isset($_POST['mailSend'])){
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = ''; 
	$mail->Host = "mail.example.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->SetLanguage("tr", "phpmailer/language");
	$mail->CharSet  ="utf-8";
	$mail->Username = "no-reply@example.com"; 
	$mail->Password = "Sifre1234";
	$mail->SetFrom("no-reply@example.com", "Sezai ALKAN"); 
	$mail->AddAddress($_POST['mail']);
	$mail->Body = "Konu: ".$_POST['subject']."<br>"."Mesaj: ".$_POST['detail'];
	$mail->Subject = $_POST['subject'];
	if(!$mail->Send()){
		echo "Mail Gönderilirken Bir Hata Oluştu";
	} else {
		echo "Mail Gönderimi Başarılı";
	}
}

?>

<!-- 
	Yukarıdaki Alanda Mail Gönderimi İçin Kullanılan Tüm Kodları Görüyorsunuz. Formumuz Post Edildiğinde Post Değerinden Gelen Kodlar 
	İle Gönderim Sağlanacaktır.Peki Bunların İçinden Düzeltmemiz Geereken Kodlar Hangisidir?.
-->

<?php 
$mail->Host = "mail.example.com";
$mail->Username = "no-reply@example.com";
$mail->Password = "Sifre1234";
?>

<!-- 
	Yukarıdaki Satırları Size Ait Olan SMTP Bilgileri Doldurmalısınız. Bu Alanlar Doldurulduktan Sonra Tls Bağlantısı İçin Mail Gönderimi 
	Sağlayabilirsiniz. Peki SSL Bağlantısı İse Mail Gönderimi Yapacaksanız.
-->

<?php 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
?>

<!-- 
	Yukarıdaki Seçenekleride SSL Bağlantısı Kullanımında Yukarıdaki Gibi Değiştirmelisiniz. Ssl Bağlatısı Sonrasında Mail Sunucu 
	Adresi Değişiklik Gösterebilir Kontrol Etmeyi Unutmayın.
-->
</body>
</html>