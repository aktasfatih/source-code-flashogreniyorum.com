<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konu Ekle</title>
</head>

<body>

<table align='center' border='0'>
	<tr><td>
<?
	$host="localhost"; $vt_adi="flasmcom_test";
	$kullanici="flasmcom_test"; $sifre="test1";
	
	$konu=$_POST['konu'];
	$icerik=$_POST['icerik'];
	
	if(!isset($konu) or !isset($icerik)){
		echo "Hata: Konu ve Açıklama yok.";
	}else{
		
		$db=@mysql_connect($host,$kullanici,$sifre) or die(" Hosta ulaşılamıyor.");
		$veritabani=@mysql_select_db($vt_adi,$db) or die("Veri tabanı adı yanlış");
		
		$sorgu=mysql_query("INSERT INTO Konular (baslik,icerik)VALUES('$konu','$icerik')");
		
		if(sorgu){
			echo "Yazdığınız bilgiler veri tabanına işlendi.";
		}else{
			echo "Üzgünüz veritabanına veri işlenemedi.";
		}
			
	}
	



?>
	</td></tr>
</table>

</body>
</html>