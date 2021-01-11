<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Veri Değiştir</title>
</head>

<body>
<table align='center' border='0'>
	<tr><td>
<?
		
		if(!isset($_GET['yenibaslik']) or !isset($_GET['yeniicerik'])){
			echo"Gerekli bilgiler yok.";
		}else{
			$id=$_GET['id'];
			$yeniicerik=$_GET['yeniicerik'];
		$yenibaslik=$_GET['yenibaslik'];
		
			$host="localhost"; $vt_adi="flasmcom_test";
			$kullanici="flasmcom_test"; $sifre="test1";
			
			$db=@mysql_connect($host,$kullanici,$sifre) or die("Host'a bağlanamadı");
			$veritabani=@mysql_select_db($vt_adi,$db) or die("Veritabanına bağlanamdı.");
			
			$sorgu=mysql_query("UPDATE Konular SET icerik='$yeniicerik' WHERE baslik='$yenibaslik'",$db);
			
			if($sorgu){
			echo "<br>$id</br> numaralı konu değiştirildi.";
			}else{
				
				echo "Hata No: ".mysql_errno()."<br>";
				echo "Hata Açılaması: ".mysql_error();
					
			}
		}
?>

	</td></tr>
</table>
</body>
</html>