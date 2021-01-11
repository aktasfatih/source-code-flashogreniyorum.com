<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Veri Tabanı denemesi</title>
</head>

<body>

	<div align='center'> <h1>Ana Menü </h1></div>

  <table align='center'>
  		<tr><td align='left'>
			
            <form action="konuekle.php" method=POST >
			Konu :<br />
            <input type='text' name='konu' width='150'/><br />
            İçerik:<br />
        <textarea name='icerik' rows="5" height='200' width='150'/></textarea><br />
            <div align='center'><input type='submit' value='Gonder'/></div>
			</form>
		</td></tr>
    </table><br />
    
    <?
	$host="localhost"; $vt_adi="flasmcom_test";
	$kullanici="flasmcom_test"; $sifre="test1";
	
	$db=@mysql_connect($host,$kullanici,$sifre) or die("Hosta ulaşılamıyor");
	
	$veritabani=@mysql_select_db($vt_adi,$db) or die("Veri tabanına ulaşılamıyor.");
	
	$sorgu=mysql_query("SELECT * FROM Konular");
	$kayit=mysql_num_rows($sorgu);
	echo "<table align='center' border='1'>";
	echo "<tr><td>";
	echo "Şu an <b>$kayit</b> kayıt bulunmaktadır.";
	echo "</td></tr>";
	echo "<tr>";
	echo "<td><font size='5' ><b>Sıra</b></font></td><td><font size='5' ><b>Başlık</b></font></td><td><font size='5' ><b>İçerik</b></font></td>";
	echo "</tr>";
	while($veri=mysql_fetch_array($sorgu)){
		echo "<tr><td>";
		echo $veri['id']."</td>";
		echo "<td>".$veri['baslik']."</td>";
		echo "<td>".$veri['icerik']."</td>";
		echo "<td>";
		echo "<A href='veridegistir.php?id=".$veri['id']."&baslik=".$veri['baslik']."&icerik=".$veri['icerik']."'>Değiştir</A>";
		echo "<A href='verisil.php?id=".$veri['id']."&baslik=".$veri['baslik']."&icerik=".$veri['icerik']."'>Sil</A>";
		echo "<br>";
		echo "</td></tr>";
	}
	echo "</table>";
		
	mysql_close($db) or die("Veritabanı kapatılamadı.");
	?>
    

</body>
</html>