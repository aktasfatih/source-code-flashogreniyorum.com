<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Konular</title>
</head>

<body>
<?
	include('data.php');
	$baglanti=@mysql_connect($host,$host_kullanici,$host_sifre);
	if(!$baglanti){
		echo "Bağlantı Sağlanamadı<br>";
		echo "Hata no: ".mysql_errno()."<br>";
		echo "Hata nedeni: ".mysql_error();
		die("Program sonlandırıldı.");
	}
	$veritabani=@mysql_select_db($vt_adi,$baglanti);
	if(!$veritabani){
		echo "Veritabanı Sağlanamadı<br>";
		echo "Hata no: ".mysql_errno()."<br>";
		echo "Hata nedeni: ".mysql_error();
		die("Program sonlandırıldı.");
	}
	$sorgu=mysql_query("SELECT * FROM flash_konular WHERE (katogori_ismi='flash_dersi')");
	echo "<table border=0>";
	$sira=1;
	while($konular=mysql_fetch_array($sorgu)){
		echo "<tr>";
		echo "<td><em><font color='#800000' >".$sira."</font></em> -</td>";
		echo "<td><font color='#A52A2A' ><A href='konu_oku.php?konuno=".$konular['id']."' >".$konular['baslik']."</A></font></td>";
		$sira++;
		echo "</tr>";
		
	}
	echo "</table>";
	mysql_close($baglanti);
?>

</body>
</html>