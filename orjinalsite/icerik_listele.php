<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br />
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

$sorgu=mysql_query("SELECT * FROM flash_konular ORDER BY id DESC");
$sira==0;
while($veri=mysql_fetch_array($sorgu)){
	
	echo "<table style='table-layout: fixed' align='center' width='700' border='0' cellpadding='0' cellspacing='0'>";
	echo "<tr><td background='../img/Goruntudosyasi/baslik_arkaplan2.gif' height='30' align='center'>".$veri['baslik']."</td></tr>";
	$parcalar = explode(' ',substr($veri['yazi'],0,450));
	$parcasayisi= count($parcalar);
	echo "<tr><td align='center' style='word-wrap: break-word'><br>";
	echo "<table width='600' border='0'><tr><td>";
	for($y=0;$y<$parcasayisi-1;$y++){
	echo $parcalar[$y].' ';}
	$yazan=$veri['yazan'];
	echo "...<br><br><div align='right'>";
		
		if(isset($_SESSION['kulladi'])){
			
			if($yazan=$_SESSION['kulladi']){
			echo "<A href='duzenle.php?konuno=".$veri['id']."'>Düzenle</A>&nbsp;&nbsp;&nbsp;";	
			}
		}
		
	echo "<A href='konu_oku.php?konuno=".$veri['id']."'>Devamını Oku...</A></div></td></tr></table></td></tr>";
	
	echo "</table><br>";
	$sira++;
	/* if($sira==3 or $sira==6 or $sira==9){
		
		include('data/konureklamiust.php');	
		echo "<br><br>";
	} */
}

?>
</body>
</html>